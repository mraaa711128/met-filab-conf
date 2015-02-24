<div class="jumbotron">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Important Information</h3>
		</div>
		<div class="panel-body">
			<div class="list-group">
				<a href="#" class="list-group-item">
					<h5 class="list-group-item-heading">Conference Date:</h5>
					<span class="list-group-item-text">July 20-22, 2015</span>
				</a>
				<a href="#" class="list-group-item">
					<h5 class="list-group-item-heading">Abstract Submission Due Date:</h5>
					<span class="list-group-item-text">May 1, 2015</span>
				</a>
				<a href="#" class="list-group-item">
					<h5 class="list-group-item-heading">Hotel Reservation Due Date:</h5>
					<span class="list-group-item-text">June 1, 2015</span>
				</a>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Latest Announce</h3>
		</div>
		<div class="panel-body">
			<div class="list-group">
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
	         	<a class="list-group-item" href="<?= $siteroot ?>/index.php?page=Announce&announce=<?= $file ?>">
					<h6 class="list-group-item-heading"><?= $subject . " " . $date; ?></h6>
<!-- 					<span class="list-group-item-text"><?= $date; ?></span> -->
	         	</a>
	         	<?php
	         			}
	         		}
	         	?>
			</div>
		</div>
	</div>

		            
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
<!--
 	<footer>
    	<p>&copy; Metropolitain FiLab 2014</p>
    </footer>
-->
</div>