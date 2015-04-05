<?php $this->load->view('template/header'); ?> <!-- header -->

	<!-- jumbotron
	================================================= -->
	<div class="jumbotron" style="height:500px;">
		<div class="container">
			<div style="padding-top: 150px;">
				<h1>Region X</h1>
				<p>
					Northern Mindanao (Filipino: Hilagang Kamindanawan) is a region of the Philippines, 
					designated as Region X. It is composed of five provinces, namely: Camiguin, 
					Misamis Oriental, Lanao del Norte, Bukidnon and Misamis Occidental and two cities 
					that are classified as highly urbanized, all occupying the north-central part of 
					Mindanao island, and the island-province of Camiguin. The regional center is 
					Cagayan de Oro City. Lanao del Norte was transferred to Northern Mindanao from 
					Region XII (then called Central Mindanao) by virtue of Executive Order No. 36. 
				</p>
			</div>
		</div>
	</div> <!-- /jumbotron -->

	<!-- image container
	================================================= -->
	<div class="container marketing">

		<h2>Churches</h2> <br>
		
		<div class="row">
			<div class="col-lg-4">
				<img class="img-rounded" src="<?php echo base_url().'assets/img/region10/churches/1.jpg'; ?>">
				<h2> Monastery of The Transfiguration </h2>
				<p> Home of the famous Monastery Boy's Choir and founded by Benedictine Monks. </p>
				<!-- <p> <a href="#" class="btn btn-primary"> Read more </a> </p> -->
			</div> <!-- /image 1 -->
			<div class="col-lg-4">
				<img class="img-rounded" src="<?php echo base_url().'assets/img/region10/churches/3.jpg'; ?>">
				<h2> Immaculate Conception Cathedral </h2>
				<p> Features a giant pipe organ. </p>
				<!-- <p> <a href="#" class="btn btn-primary"> Read more </a> </p> -->
			</div> <!-- /image 2 -->
			<div class="col-lg-4">
				<img class="img-rounded" src="<?php echo base_url().'assets/img/region10/churches/4.jpg'; ?>">
				<h2> San Jose Seminary </h2>
				<p> Incorporates the St, John Vianney Seminary and the Carmelite Convent. </p>
				<!-- <p> <a href="#" class="btn btn-primary"> Read more </a> </p> -->
			</div> <!-- /image 3 -->
		</div> <!-- /row -->
	</div> <!-- /image container -->
	
	<div class="container" style="margin-bottom: 100px">
		<hr class="featurette-divider">
	</div>	
	


<?php $this->load->view('template/footer'); ?> <!-- footer -->