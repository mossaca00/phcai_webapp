<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/styles.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/carousel.css'; ?>">
</head>
<body>

	<!-- navbar
	================================================= -->
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand"> PHCAI </a>
					</div> <!-- /navbar-header -->
					
					<div id="navbar" class="navbar-collapse collapse navbar-right" aria-expanded="false">
						<ul class="nav navbar-nav" aria-expanded="false">
							<li ><a href="<?php echo base_url('module/home'); ?>">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Destinations <b class="caret"></b> </a>
								<ul class="dropdown-menu">
									<li class="dropdown-header">Historical Sites</li>
									<li><a href="<?php echo base_url('module/regionI'); ?>">Region I</a></li>
									<li><a href="<?php echo base_url('module/regionII'); ?>">Region II</a></li>
									<li><a href="<?php echo base_url('module/regionIII'); ?>">Region III</a></li>
									<li><a href="<?php echo base_url('module/regionIV'); ?>">Region IV</a></li>
									<li><a href="<?php echo base_url('module/regionV'); ?>">Region V</a></li>
									<li class="divider"> </li>
									<li class="dropdown-header">Churches</li>
									<li><a href="<?php echo base_url('module/regionIc'); ?>">Region I</a></li>
									<li><a href="<?php echo base_url('module/regionIIc'); ?>">Region II</a></li>
									<li><a href="<?php echo base_url('module/regionIIIc'); ?>">Region III</a></li>
									<li><a href="<?php echo base_url('module/regionIVc'); ?>">Region IV</a></li>
									<li><a href="<?php echo base_url('module/regionVc'); ?>">Region V</a></li>
								</ul>
							</li>
							<li ><a href="<?php echo base_url('module/login'); ?>">Log In</a></li>
						</ul>
					</div> <!-- /navbar-collapse -->
				</div> <!-- /container -->
			</nav> <!-- /navbar -->
		</div> <!-- /container -->
	</div> <!-- /navbar-wrapper -->

<!-- header template end -->

<!-- scontent start -->


	