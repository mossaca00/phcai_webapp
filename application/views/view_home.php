<?php $this->load->view('template/header'); ?> <!-- header -->

	<!-- carousel
	================================================= -->
	<div id="myCarousel" class="carousel slide">
		<!-- carousel indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol> <!-- /carousel-indicators -->

		<div class="carousel-inner">
			<div class="item active">
		      	<img src="<?php echo base_url(); ?>assets/img/slide11.png">
		      	<div class="container">
			    	<div class="carousel-caption">
			    		<h1>Chocolate Hills, Bohol</h1>
			    		<p><a href="#" class="btn btn-primary">Read more...</a></p>
			    	</div>
			    </div>
		    </div> <!-- /item -->
			
		    <div class="item">
		      	<img src="<?php echo base_url(); ?>assets/img/slide22.png">
		      	<div class="carousel-caption">
		    		<h1>Boracay Beach, Boracay</h1>
		    		<p><a href="#" class="btn btn-primary">Read more...</a></p>
		    	</div>
		    </div> <!-- /item -->

			<div class="item">
		      	<img src="<?php echo base_url(); ?>assets/img/slide33.png">
		      	<div class="carousel-caption">
		    		<h1>Palawan</h1>
		    		<p><a href="#" class="btn btn-primary">Read more...</a></p>
		    	</div>
		    </div> <!-- /item -->

		</div> <!-- /carousel-inner -->
			
		<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
	  	</a>
	  	<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
	  	</a>
	</div> <!-- carousel -->

	<!-- region content -->
	<?php $this->load->view('home-imports/rcontents'); ?>		

<!-- home content end -->

<?php $this->load->view('template/footer'); ?> <!-- footer -->