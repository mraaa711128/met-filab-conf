<div class="jumbotron">
  <div class="container">
    <h1>Organizing Commitee 2014</h1>
    <p></p>
    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
  </div>
</div>
<div class="container">
	<div class="row">
		<?php $arrMembers = read_member_list(3) ?>
		<?php for ($i=0; $i < count($arrMembers); $i++):
					$memberObj = read_member_content($arrMembers[$i]);
					if (is_null($memberObj) == false) {
						$name = $memberObj["Name"];
						$img = $memberObj["Image"];
						$acadames = $memberObj["Acadames"];
						$file = str_replace(".txt", "", $arrMembers[$i]);
						//$interests = $memberObj["Interests"];
					}
		?>
		<div class="col-lg-4">
         	<img class="img-circle" src="<?= $siteroot?>/img/<?= $img ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
         	<h2><?= $name ?></h2>
      		<?php foreach ($acadames as $acadame): ?>
      		<p><?= $acadame["Title"] ?></p>
      		<?php endforeach ?>
      		<br />
         	<p><a class="btn btn-default" href="<?= $siteroot ?>/index.php?page=Commitee&member=<?= $file ?>" role="button">details »</a></p>
        </div>
    	<?php endfor; ?>
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
	</div>
	<hr />
</div>