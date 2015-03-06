<div class="jumbotron">
  <div class="container">
    <h1 class="page-header">Welcome to Conference 2015 !</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
  </div>
</div>
<!-- <div class="container"> -->
	<div class="row">
		<div class="col-xs-12 col-md-9">
	       	<table class="table table-striped" style="margin-top: 20px">
	         	<thead>
	              <tr>
	                <th><h4>Subject</h4></th>
	                <th><h4>Author</h4></th>
	                <th><h4>Date & Time</h4></th>
	              </tr>
	         	</thead>
	         	<tbody>
	         		<?php 
	         			$arrAnnounces = read_announce_list(999);
	         			for ($i = 0; $i < count($arrAnnounces); $i++) {
	         				$announceObj = read_announce_content($arrAnnounces[$i]);
	         				if (is_null($announceObj) == false) {
	         					$subject = $announceObj["Subject"];
	         					$author = $announceObj["Author"];
	         					$date = $announceObj["Date"];
	         					$time = $announceObj["Time"];
	         					$file = str_replace(".txt", "", $arrAnnounces[$i]);
	         		?>
		            <tr>
		                <td><a class="btn btn-lg btn-link" href="<?= $siteroot ?>/index.php?page=Announce&announce=<?= $file ?>"><?= $subject; ?></a></td>
		                <td><h5><?= $author; ?></h5></td>
		                <td><h5><?= $date . " " . $time; ?></h5></td>
		            </tr>
	         		<?php
	         				}
	         			}
	         		?>
	         		<!--	
	              <tr>
	                <td><h5>Program start registering ...</h5></td>
	                <td><h5>Admin</h5></td>
	                <td><h5>2014-11-20</h5></td>
	              </tr>
	              <tr>
	                <td><h5>System Testing 2 ...</h5></td>
	                <td><h5>System Admin</h5></td>
	                <td><h5>2014-11-20</h5></td>
	              </tr>
	              <tr>
	                <td><h5>System testing 1 ...</h5></td>
	                <td><h5>System Admin</h5></td>
	                <td><h5>2014-11-19</h5></td>
	              </tr>
	              	-->
	         	</tbody>
	       	</table>
       	</div>
		<div class="col-xs-12 col-md-3">
	        <?php
	          include($pageroot . "/content/AnnounceList.php");
	        ?>
		</div>
 	</div>
<!--
 	<footer>
    	<p>&copy; Metropolitain FiLab 2014</p>
    </footer>
-->
<!-- </div> -->