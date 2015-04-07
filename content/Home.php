<!DOCTYPE html>
<div class="jumbotron">
    <div class="imgcontainer">
    <img src="<?= $siteroot ?>/img/conferencebanner2.png" class="img-responsive">
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-9">
        <h2 class="page-header">
            Welcome to the 
            <strong>
                <span style="color: red">B</span><span style="color: orange">E</span><span style="color: blue">S</span><span style="color: green">T</span>
            </strong>
             conference
        </h2>
        <!-- <p class="lead">This is the 2nd International Conference on “Big data in Economics, Science and Technology" (BEST).</p> -->
        <p class="lead">BEST 2015 is an international interdisciplinary conference combining aspects of economics, science, and technology to address complex societal issues that we face today on a global scale.</p>
        <div class="col-xs-12 col-md-12">
            <p class="lead">
                Stability and sustainability of economic systems is an important issue in the current climate of high uncertainty for the future of global economy. In addition to stable financial systems, economic sustainability also depends on reliable health care systems, secure computer networks, dependable transportation, and solid infrastructure, to name a few. In this environment, science and technology play an important role in modeling and forecasting future economic outcomes.
                <a href="<?= $siteroot ?>/index.php?page=Scope">More...</a>
            </p>
        </div>
        <div class="col-xs-12 col-md-4">
            <a href="<?= $siteroot ?>/index.php?page=Album" class="thumbnail">
                <img src="<?= $siteroot?>/assest/album/2015/ohrid-04.jpg" class="img-responsive" style="width: 210px;">
            </a>
        </div>
        <div class="col-xs-12 col-md-4">
            <a href="<?= $siteroot ?>/index.php?page=Album" class="thumbnail">
                <img src="<?= $siteroot?>/assest/album/2015/ohrid-02.jpg" class="img-responsive" style="width: 236px;">
            </a>
        </div>
        <div class="col-xs-12 col-md-4">
            <a href="<?= $siteroot ?>/index.php?page=Album" class="thumbnail">
                <img src="<?= $siteroot?>/assest/album/2015/ohrid-14.jpg" class="img-responsive" style="width: 245px;">
            </a>
        </div>

    </div>
    <div class="col-xs-12 col-md-3">
        <?php
          include($pageroot . "/content/AnnounceList.php");
        ?>
    </div>
</div>