<div class="jumbotron">
  <div class="container">
    <h1 class="page-header">Album 2015</h1>
  </div>
</div>

<div class="row">
	<div class="col-md-12">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
<!-- 		    <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol> -->
		    <div class="carousel-inner" role="listbox">
		    	<?php 
		    		$arrImages = read_album_list(2015);
		    		for ($i=0; $i < count($arrImages); $i++) { 
		    			$imgUrl = $siteroot . "/assest/album/2015/" . $arrImages[$i];
		    			if ($i == 0) {
		    	?>
		        <div class="item active">
				<?php
		    			} else {
		    	?>
		        <div class="item">
		    	<?php
		    			}
		    	?>
		            <img src="<?= $imgUrl ?>" class="img-responsive center-block" alt="Slide <?= ($i+1) ?>" />
		        </div>
		    	<?php
		    		}
		    	?>
<!-- 		            <div class="container">
		                <div class="carousel-caption">
		                    <h1>One for Three</h1>
		                    <p>From now on, we give you three magnificiant tools which are the keys of a successful project management with only one time registration.</p>
		                    <p><a class="btn btn-lg btn-primary" href="/signup" role="button">Sign up today</a></p>
		                </div>
		            </div>
		        </div> -->
<!-- 		        <div class="item">
		            <img src="{{ STATIC_URL }}img/Banner21.png" alt="Second slide">
		            <div class="container">
		                <div class="carousel-caption">
		                    <h1>Connect from Anywhere</h1>
		                    <p>Meeting room is no longer bounded. It can be everywhere, even in your living room or on your bed.</p>
		                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
		                </div>
		            </div>
		        </div>
		        <div class="item">
		            <img src="{{ STATIC_URL }}img/Banner31.png" alt="Third slide">
		            <div class="container">
		                <div class="carousel-caption">
		                    <h1>Instant Feedback</h1>
		                    <p>It's no longer a difficult progress. Save your time and cost to get focus back on your projects.</p>
		                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
		                </div>
		            </div>
		        </div> -->
		    </div>
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		    </a>
		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#myCarousel").carousel({
            interval: 5000,
            pause: "hover",
            wrap: true
        });
    });
</script>

