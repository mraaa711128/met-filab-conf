<?php
	$memberFile = $_GET["member"] . ".txt";
	$memberObj = read_member_content($memberFile);
	if (is_null($memberObj) == false) {
		$name = $memberObj["Name"];
		$img = $memberObj["Image"];
		$acadames = $memberObj["Acadames"];
		$interests = $memberObj["Interests"];
	}
?>
<div class="jumbotron">
  <div class="container">
    <h1 class="page-header">Organizing Commitee 2014</h1>
    <p></p>
    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
  </div>
</div>
<div class="container">
	<div class="row">
		<div class=="col-xs-9">
			<div class="col-xs-3">
				<img class="img-circle" src="<?= $siteroot?>/img/<?= $img ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
	      		<h2><?= $name ?></h2>
	      		<br />
	      		<?php foreach ($acadames as $acadame): ?>
	      		<p><?= $acadame["Title"] ?></p>
	      		<?php endforeach ?>
			</div>
			<div class="col-xs-9">
				<br />
				<h3> Research Interests </h3>
				<?php foreach ($interests as $interest): ?>
				<br />
				<p><?= $interest["Description"] ?></p>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-5">
			
		</div>
	</div>
</div>
