<!DOCTYPE html>
<div class="jumbotron">
    <div class="imgcontainer">
    <img src="<?= $siteroot ?>/img/conferencebanner.png">
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-9">
        <h2 class="page-header">
            Welcome to the 
            <strong>
                <span style="color: red">B.</span>
                <span style="color: orange">E.</span>
                <span style="color: blue">S.</span>
                <span style="color: green">T.</span>
            </strong>
             conference
        </h2>
        <p class="lead">This is the 2nd International Conference on “Big data in Economics, Science and Technology" (BEST).</p>
        <div class="col-xs-12 col-md-12">
            <p class="lead">
                Sustainability of economic systems is an important issue in the current climate of high uncertainty for the future of global economy. In addition to stable financial systems, economic sustainability also depends on reliable health care systems, secure computer networks, dependable transportation, and solid infrastructure, to name a few. In this environment, science and technology play an important role in modeling and forecasting future economic outcomes.
                <a href="<?= $siteroot ?>/index.php?page=Scope">More...</a>
            </p>
        </div>
<!--         <div class="col-xs-12 col-md-6">
          <ul class="lead">
              <li>Network Analysis Tools</li>
              <li>Modeling and Simulations of Financial Networks</li>
              <li>Financial Informatics</li>
              <li>Data coverage and availability</li>
              <li>Risk evaluation on various networks</li>
              <li>New Internet infrastructure</li>
              <li>Health informatics</li>
              <li>Modeling of failure and recovery in coupled networks</li>
              <li>Business cycles and crisis event analysis</li>
              <li>Future tasks and prospects</li>
          </ul>
        </div> -->
    </div>
    <div class="col-xs-12 col-md-3">
        <?php
          include($pageroot . "/content/AnnounceList.php");
        ?>
    </div>
</div>