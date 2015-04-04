<div class="panel-container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Important Information</h3>
		</div>
		<div class="panel-body">
			<div class="list-group">
				<div class="list-group-item">
					<h5 class="list-group-item-heading"><strong>Conference Date:</strong></h5>
					<span class="list-group-item-text">July 20-22, 2015</span>
				</div>
				<div class="list-group-item">
					<h5 class="list-group-item-heading"><strong>Abstract/Presentation<br />Submission Due Date:</strong></h5>
					<span class="list-group-item-text">May 1, 2015</span>
				</div>
				<div class="list-group-item">
					<h5 class="list-group-item-heading"><strong>Hotel Reservation Due Date:</strong></h5>
					<span class="list-group-item-text">June 1, 2015</span>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Latest Announcement</h3>
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
					<h5 class="list-group-item-heading"><?= get_short_date($date); ?>:</h5>
					<p><?= $subject ?></p>
<!-- 					<span class="list-group-item-text"><?= $date; ?></span> -->
	         	</a>
	         	<?php
	         			}
	         		}
	         	?>
			</div>
		</div>
	</div>		            
</div>