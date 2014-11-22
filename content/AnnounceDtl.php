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
    	<div class="page-header" style="margin-bottom: 0px;">
    		<h1><?= $subject ?></h1>
    	</div>
    	<h4>
    		<?= "- by &nbsp;" . $author . " &nbsp;&nbsp;" . $date . " " . $time; ?>
    	</h4>
    	<div class="well">
        	<p><?= $content ?></p>
    	</div>
	</div>
</div>
<div class="container">
 	<hr />
 	<footer>
    	<p>&copy; Metropolitain FiLab 2014</p>
    </footer>
</div>