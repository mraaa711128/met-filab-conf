    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <!--
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      -->
        <div class="imgcontainer">
          <img src="<?= $siteroot ?>/img/conference1.png">
          <h1 style="position: absolute; top: 0px; right: 0px; color: white; text-align: right;">
            Big Data Science & Economic
          </h1>
          <h1 style="position: absolute; top: 65px; right: 0px; color: white; text-align: right;">
            Complex Systems 2015
          </h1>
          <h1 style="position: absolute; top: 130px; right: 0px; color: white; text-align: right;">
            July 21 - 24
          </h1>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <?php 
          $arrAnnounces = read_announce_list(3);
          for ($i = 0; $i < count($arrAnnounces); $i++) {
            $announceObj = read_announce_content($arrAnnounces[$i]);
            if (is_null($announceObj) == false) {
              $subject = $announceObj["Subject"];
              $content = $announceObj["Content"];
              $file = str_replace(".txt", "", $arrAnnounces[$i]);
        ?>
        <div class="col-md-4">
          <h2 class="no-wrap-heading"><?= $subject; ?> ...</h2>
          <p class="summary-description"><?= $content; ?> ...</p>
          <p><a class="btn btn-default" href="<?= $siteroot ?>/index.php?page=Announce&announce=<?= $file ?>" role="button">View details &raquo;</a></p>
        </div>
        <?php
            }
          }
        ?>
        <!--
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        -->
      </div>

      <hr />
<!--
      <footer>
        <p>&copy; Metropolitain FiLab 2014</p>
      </footer>
-->
    </div> <!-- /container -->
