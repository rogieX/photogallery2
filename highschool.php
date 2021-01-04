<?php
require_once 'assets/head.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Junior High School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $cdnimg; ?>assets/css/style.css"/>
</head>
<body>
	<div class="container">
		<!-- header -->
		<div class="p-2 text-bold text-fenk h5 text-capitalize"> 
			memoriae

			<a class=" btn btn-error float-right text-light s-rounded p-2" href="index.php"><i class="icon icon-cross icon-4X"></i></a>

		</div>
		<!-- hero -->
		<div class="hero text-dark" style="" >
			<div class="hero-body">
				<div class="text-center text-fenk text-bold h1 text-capitalize" >
				Junior HS</div>
			</div>
		</div>

<!-- Gallery -->
		<div class="container">
			<div class="columns" >
				<div class="column col-8 col-md-12 p-centered">


					<div class="parallax" >
						<div class="parallax-top-left" tabindex="1"></div>
						<div class="parallax-top-right" tabindex="2"></div>
						<div class="parallax-bottom-left" tabindex="3"></div>
						<div class="parallax-bottom-right" tabindex="4"></div>
						<div class="parallax-content p-2" style="border: 2px solid #ffafcc" >
							<div class="parallax-front">
								<!--  <h2>tvOS parallax demo</h2> -->
							</div>
							<div class="parallax-back">
								<div class="columns" >
									<!-- img 1 -->
									<div class="column col-4 col-md-12 mt-2" style="border: 0px solid #ff5d8f">
										<div class="card">
											<div class="card-image" >
												<img src="<?php echo $cdnimg; ?>assets/img/hs1.jpg" class="img-responsive">
											</div>
										</div>
									</div>
									<!-- img 2 -->
									<div class="column col-4 col-md-12 mt-2" style="border: 0px solid #ff5d8f">
										<div class="card">
											<div class="card-image">
												<img src="<?php echo $cdnimg; ?>assets/img/hs2.jpg" class="img-responsive">
											</div>
										</div>
									</div>
									<!-- img 3 -->
									<div class="column col-4 col-md-12 mt-2" style="border: 0px solid #ff5d8f">
										<div class="card">
											<div class="card-image">
												<img src="<?php echo $cdnimg; ?>assets/img/hs3.jpg" class="img-responsive">
											</div>
										</div>
									</div>
									<!-- img 4 -->
									<div class="column col-4 col-md-12 mt-2" style="border: 0px solid #ff5d8f">
										<div class="card">
											<div class="card-image">
												<img src="<?php echo $cdnimg; ?>assets/img/hs4.jpg" class="img-responsive">
											</div>
										</div>
									</div>
									<!-- img 5 -->
									<div class="column col-4 col-md-12 mt-2" style="border: 0px solid #ff5d8f">
										<div class="card">
											<div class="card-image">
												<img src="<?php echo $cdnimg; ?>assets/img/hs5.jpg" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>








<!-- footer -->
		<div class="hero hero-sm ">
			<div class="hero-body">
				<div class="text-center text-bold h6 text-fenk "> Copyright 2020</div>
			</div>
		</div>
	</div>
</body>
</html>