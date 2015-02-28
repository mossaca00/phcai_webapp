<?php $this->load->view('template/header'); ?> <!-- header -->

	<!-- jumbotron
	================================================= -->
	<div class="jumbotron" style="height:500px;">
		<div class="container">
			<div style="padding-top: 150px;">
				<h1>Region XI</h1>
				<p>
					Davao Region or Southern Mindanao designated as Region XI. It is located on the 
					southeastern portion of Mindanao, and consists of five provinces, namely: 
					Compostela Valley, Davao del Norte, Davao del Sur, Davao Oriental, and the newly 
					created, Davao Occidental. The region encloses the Davao Gulf and its regional 
					center is Davao City. Davao is the Hispanicized pronunciation of daba-daba, 
					the Bagobo word for "fire" (the Cebuano translation is "kalayo").
				</p>
			</div>
		</div>
	</div> <!-- /jumbotron -->

	<!-- image container
	================================================= -->
	<div class="container marketing">

		<h2>Historical Sites</h2> <br>
		
		<div class="row">
			<div class="col-lg-4">
				<img class="img-rounded" src="<?php echo base_url().'assets/img/region11/historical/1.jpg'; ?>">
				<h2> Dabaw Museum </h2>
				<p> Features the cultural minorities of South Mindanao, such as the Mansaka and Bagobo. </p>
				<!-- <p> <a href="#" class="btn btn-primary"> Read more </a> </p> -->
			</div> <!-- /image 1 -->
			<div class="col-lg-4">
				<img class="img-rounded" src="<?php echo base_url().'assets/img/region11/historical/3.jpg'; ?>">
				<h2> Multi-Colored Tombs </h2>
				<p> Unique tombs that are the subject of romantic legends. </p>
				<!-- <p> <a href="#" class="btn btn-primary"> Read more </a> </p> -->
			</div> <!-- /image 2 -->
		</div> <!-- /row -->
	</div> <!-- /image container -->
	
	<div class="container" style="margin-bottom: 100px">
		<hr class="featurette-divider">
	</div>	
	


<?php $this->load->view('template/footer'); ?> <!-- footer -->