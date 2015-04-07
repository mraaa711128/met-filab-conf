<div class="jumbotron">
  <div class="container">
    <h1 class="page-header">Organizing Committee of BEST Conference 2015</h1>
    <!-- <p></p> -->
    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
  </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-9">
    <?php $arrMembers = read_member_list(4) ?>
    <?php for ($i=0; $i < count($arrMembers); $i++):
        $memberObj = read_member_content($arrMembers[$i]);
        if (is_null($memberObj) == false) {
            $name = $memberObj["Name"];
            $img = $memberObj["Image"];
            $affiliation = $memberObj["Affiliation"];
            $email = $memberObj["Email"];
            //$file = str_replace(".txt", "", $arrMembers[$i]);
            //$interests = $memberObj["Interests"];
        }
    ?>
		  <div class="col-xs-12 col-sm-6" style="text-align: center;">
         	<img class="img-circle" src="<?= $siteroot?>/img/<?= $img ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
         	<h2><?= $name ?></h2>
      		<p><?= $affiliation ?></p>
      		<p>Email: <a class="btn btn-link" href="mailto:<?= $email ?>" role="button"><?= $email ?></a></p>
          <br />
      </div>
    	<!--
        <div class="col-lg-4">
         	<img class="img-circle" src="" alt="Generic placeholder image" style="width: 140px; height: 140px;">
         	<h2>Hideaki Aovama</h2>
         	<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
         	<p><a class="btn btn-default" href="#" role="button">details »</a></p>
        </div>
        <div class="col-lg-4">
         	<img class="img-circle" src="" alt="Generic placeholder image" style="width: 140px; height: 140px;">
         	<h2>Duk Hee Lee</h2>
         	<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
         	<p><a class="btn btn-default" href="#" role="button">details »</a></p>
        </div>
    	-->
    <?php endfor; ?>
        
    </div>
    <div class="col-xs-12 col-md-3">
        <?php
          include($pageroot . "/content/AnnounceList.php");
        ?>
    </div>
</div>