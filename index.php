<?php 
  include("rootpath.php");

  $page = $_GET["page"];
  $announce = $_GET["announce"];
  $member = $_GET["member"];
  $page = ($page == "" ? "Home" : $page);

  function get_short_date($date) {
    $arrDate = explode('-',$date);
    $year = $arrDate[0];
    $month = $arrDate[1];
    $day = $arrDate[2];
    return $month . "/" . $day . "/" . substr($year,2,2);
  }

  function read_album_list($year) {
    $filepath = $GLOBALS["pageroot"] . "/assest/album/" . $year;
    $arrImages = scandir($filepath, SCANDIR_SORT_ASCENDING);
    $count = 0;
    $arrReturn = [];
    for ($i=0; $i < count($arrImages); $i++) { 
      $filename = $arrImages[$i];
      if ($filename != ".." && $filename != "." && $filename != ".DS_Store" && is_dir($filename) == false) {
        array_push($arrReturn,$filename);
        $count++;
      }
    }
    return $arrReturn;
  }

  function read_announce_list($max) {
    $filepath = $GLOBALS["pageroot"] . "/assest/announce/";
    $arrAnnounces = scandir($filepath, SCANDIR_SORT_DESCENDING);
    $count = 0;
    $arrReturn = [];
    for ($i = 0; $i < count($arrAnnounces); $i++) {
      $filename = $arrAnnounces[$i];
      if ($filename != ".." && $filename != "." && is_dir($filename) == false) {
        if ($count < $max) {
          array_push($arrReturn,$filename);
          $count++;
        }
      }
    }
    return $arrReturn;
  }

  function read_announce_content($filename) {
    $filepath = $GLOBALS["pageroot"] . "/assest/announce/" . $filename; 
    if (file_exists($filepath) == true && is_dir($filepath) == false) {
      $strContent = file_get_contents($filepath);
      return json_decode($strContent, true);
    } else {
      return null;
    }
  }

  function read_member_list($max) {
    $filepath = $GLOBALS["pageroot"] . "/assest/member/";
    $arrMembers = scandir($filepath, SCANDIR_SORT_ASCENDING);
    $count = 0;
    $arrReturn = [];
    for ($i = 0; $i < count($arrMembers); $i++) {
      $filename = $arrMembers[$i];
      if ($filename != ".." && $filename != "." && is_dir($filename) == false) {
        if ($count < $max) {
          array_push($arrReturn,$filename);
          $count++;
        }
      }
    }
    return $arrReturn;
  }

  function read_member_content($filename) {
    $filepath = $GLOBALS["pageroot"] . "/assest/member/" . $filename; 
    if (file_exists($filepath) == true && is_dir($filepath) == false) {
      $strContent = file_get_contents($filepath);
      return json_decode($strContent, true);
    } else {
      return null;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= $siteroot ?>/img/favicon.ico">

    <title>B.E.S.T. Conference</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $siteroot ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= $siteroot ?>/css/jumbotron.css" rel="stylesheet">
    <!-- <link href="<?= $siteroot ?>/css/uploadfile.css" rel="stylesheet"> -->
    <link href="<?= $siteroot ?>/css/fileinput.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="<?= $siteroot ?>/js/ie-emulation-modes-warning.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?= $siteroot ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- // <script src="<?= $siteroot ?>/js/jquery.uploadfile.js"></script> -->
    <script src="<?= $siteroot ?>/js/fileinput.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            B.E.S.T. Conference
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?= ($page == "Home" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Home">Home</a></li>
<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Conference <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"> -->
                <li class="<?= ($page == "Scope" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Scope">Scope</a></li>
                <li class="<?= ($page == "Commitee" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Commitee">Committee</a></li>
                <li class="<?= ($page == "ScienceCommitee" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=ScienceCommitee">Scientific Committee</a></li>
                <li class="<?= ($page == "Album" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Album">Gallery</a></li>
<!--               </ul>
            </li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Submission <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="<?= ($page == "Abstract" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Abstract">Abstract Submission</a></li>
                <li class="<?= ($page == "Presentation" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Presentation">Presentation Submission</a></li>
              </ul>
            </li>
            <li class="<?= ($page == "Register" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Register">Registration</a></li>
            <li class="<?= ($page == "Schedule" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Schedule">Schedule</a></li>
            <li class="<?= ($page == "Program" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Program">Program</a></li>
            <li class="<?= ($page == "Reservation" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Reservation">Hotel Reservation</a></li>
            <li class="<?= ($page == "Location" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Location">Travel</a></li>
            <li class="<?= ($page == "Announce" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Announce">Announcement</a></li>
            <li class="<?= ($page == "Contact" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Contact">Contact Info</a></li>
                
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header">Conference ...</li>
                <li><a href="http://www.metropol-ohrid.com.mk/EN/default.aspx" target="_blank">Hotel</a></li>
                <li class="<?= ($page == "Ohrid" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Ohrid">Ohrid</a></li>
                <li class="<?= ($page == "Macedonia" ? "active" : ""); ?>"><a href="<?= $siteroot ?>/index.php?page=Macedonia">Macedonia & Skopje</a></li>
                
                <!--
                <li><a href="<?= $siteroot ?>/index.php?page=Map">Tourism Map</a></li>
                -->
                <li class="divider"></li>
                <li class="dropdown-header">More Info ...</li>
                <li><a href="http://www.ohrid.com.mk/routes/routes.asp?ID=392" target = "_blank">Ohrid Tourism Official Website</a></li>
                <li><a href="http://www.skopje.gov.mk/en/" target="_blank">Skopje Official Website</a></li>
                <li><a href="http://www.tourismmacedonia.gov.mk/en/" target = "_blank">Macedonia Tourism Official Website</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<!--       <div class="row">
      <div class="col-md-9"> -->
        <!-- Include Content Php by Different Page -->
        <?php 
          if ($announce != "") {
            include($pageroot . "/content/AnnounceDtl.php");
          } elseif ($member != "") {
            include($pageroot . "/content/CommiteeDtl.php");
          } else {
            include($pageroot . "/content/" . $page . ".php");    
          }
        ?>
<!--       </div>
      <div class="col-md-3">
        <?php
          // include($pageroot . "/content/AnnounceList.php");
        ?>
      </div>
      </div> -->
    </div>

    <hr />

    <div class="container">
      <footer>
        <div class="col-md-5" style="text-align: center;">
          <p style="padding-top: 10px;">&copy; Boston University Financial Informatics Lab 2015</p>
        </div>
        <div class="col-md-7" style="text-align: center;">
          <!-- <div class="container"> -->
            <img src="<?= $siteroot ?>/img/BU_Logo_sm.jpg" style="width: 77px;">
            <img src="<?= $siteroot ?>/img/KAIST_Logo_sm.jpg" style="width: 77px;">
            <img src="<?= $siteroot ?>/img/KU_Logo_sm.jpg" style="width: 77px;">
            <img src="<?= $siteroot ?>/img/FINKI_UKIM_EN_Logo_sm.jpg" style="width: 221px;">
          <!-- </div> -->
        </div>
      </footer>
    </div>
<!--     <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <img src="<?= $siteroot ?>/img/BU_Logo.jpg" style="width: 111px; height: 50px;">
            <img src="<?= $siteroot ?>/img/KAIST_Logo.jpg" style="width: 111px; height: 50px;">
            <img src="<?= $siteroot ?>/img/KU_Logo.jpg" style="width: 111px; height: 50px;">
        </div>
    </nav> -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= $siteroot ?>/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
        $(function() {
            $("body").css("padding-top",$("nav>div").height());
            
            $(window).resize(function() {
                $("body").css("padding-top",$("nav>div").height());
            });
        });
    </script>
  </body>
</html>

