<?php
	$announceFile = $_GET["announce"] . ".txt";
	$announceObj = read_announce_content($announceFile);
	if (is_null($announceObj) == false) {
		$subject = $announceObj["Subject"];
		$author = $announceObj["Author"];
		$date = $announceObj["Date"];
		$time = $announceObj["Time"];
		$content = $announceObj["Content"];
	}
?>
<div class="jumbotron">
	<div class="container">
    	<h1 class="page-header">Announcement for BEST Conference 2015</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-9">
		<h3 class="page-header"><?= $subject ?></h3>
    	<div class="container-fluid">
        	<p class="lead"><h4><strong><?= $content ?></strong></h4></p>
    	</div>
    	<h5 class="page-footer">
    		<?= "- by &nbsp;" . $author . " &nbsp;&nbsp;" . $date . " " . $time; ?>
    	</h5>
	</div>
	<div class="col-xs-12 col-md-3">
	    <?php
	      include($pageroot . "/content/AnnounceList.php");
	    ?>
	</div>
</div>