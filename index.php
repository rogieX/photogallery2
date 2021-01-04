<?php
require_once 'assets/head.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Photo Gallery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $cdnimg; ?>assets/css/style.css"/>
</head>
<body>
	<div class="container">
		<!-- header -->
		<div class="p-2 text-bold text-fenk h5 text-capitalize"> 
		memoriae </div>
		<!-- hero -->
		<div class="hero text-dark" style="" >
			<div class="hero-body">
				<div class="text-center text-fenk text-bold h1 text-capitalize" >
				memoriae</div>
				<!-- <div class="divider"></div> -->
				<div class="text-center text-bold h6">My personal photo gallery</div>
			</div>
		</div>

		<!-- tile -->
		<div class="columns container">
			<div class="column col-6 col-md-12 p-centered" >

				<div class="tile" style="border-left:4px solid #ffc8dd; padding:2rem">
					<div class="tile-icon">
						<figure class="avatar avatar-xl"><img src="<?php echo $cdnimg; ?>assets/img/avatar.PNG" alt="Rogie"></figure>
					</div>
					<div class="tile-content">
						<p class="tile-title text-bold text-fenk">Rogie Villanueva</p>
						<p class="tile-subtitle text-justify">Hi! This is my virtual photo album. I'm currently a second year BSIT student. This serves as my portfolio in web designing.</p>
					</div>
			</div>
		</div>
	</div>
	


	<br/>
	<br/>

	<div class="container">
		<div class="columns">
			<div class="column col-6 col-md-12 p-centered" >
				<div class="text-bold text-center h4 text-fenk">Highlights</div>
			</div>
		</div>

	</div>
	<br/>
	<br/>
	<div class="container">
		<div class="columns">
			<div class="column col-8 col-md-12 p-centered">
				<div class="carousel">
					<!-- carousel locator -->
					<input class="carousel-locator" id="slide-1" type="radio" name="carousel-radio" hidden="" checked="">
					<input class="carousel-locator" id="slide-2" type="radio" name="carousel-radio" hidden="">
					<input class="carousel-locator" id="slide-3" type="radio" name="carousel-radio" hidden="">
					<input class="carousel-locator" id="slide-4" type="radio" name="carousel-radio" hidden="">

					<!-- carousel container -->
					<div class="carousel-container">
						<!-- carousel item -->
						<figure class="carousel-item">
							<label class="item-prev btn btn-action btn-lg" for="slide-4"><i class="icon icon-arrow-left"></i></label>
							<label class="item-next btn btn-action btn-lg" for="slide-2"><i class="icon icon-arrow-right"></i></label>
							<img class="img-responsive rounded" src ="<?php echo $cdnimg; ?>assets/img/col1.jpg" alt="pic2">
						</figure>
						<figure class="carousel-item">
							<label class="item-prev btn btn-action btn-lg" for="slide-1"><i class="icon icon-arrow-left"></i></label>
							<label class="item-next btn btn-action btn-lg" for="slide-3"><i class="icon icon-arrow-right"></i></label>
							<img class="img-responsive rounded" src="<?php echo $cdnimg; ?>assets/img/col2.jpg" alt="pic2">
						</figure>
						<figure class="carousel-item">
							<label class="item-prev btn btn-action btn-lg" for="slide-2"><i class="icon icon-arrow-left"></i></label>
							<label class="item-next btn btn-action btn-lg" for="slide-4"><i class="icon icon-arrow-right"></i></label>
							<img class="img-responsive rounded" src="<?php echo $cdnimg; ?>assets/img/col3.jpg" alt="pic3">
						</figure>
						<figure class="carousel-item">
							<label class="item-prev btn btn-action btn-lg" for="slide-3"><i class="icon icon-arrow-left"></i></label>
							<label class="item-next btn btn-action btn-lg" for="slide-1"><i class="icon icon-arrow-right"></i></label>
							<img class="img-responsive rounded" src="<?php echo $cdnimg; ?>assets/img/col4.jpg" alt="pic4">
						</figure>
					</div>
					<!-- carousel navigation -->
					<div class="carousel-nav">
						<label class="nav-item text-hide c-hand" for="slide-1">1</label>
						<label class="nav-item text-hide c-hand" for="slide-2">2</label>
						<label class="nav-item text-hide c-hand" for="slide-3">3</label>
						<label class="nav-item text-hide c-hand" for="slide-4">4</label>
					</div>
				</div>
			</div>
		</div>
	</div>


	<br/>
	<br/>

	<div class="container">
		<div class="columns">
			<div class="column col-6 col-md-12 p-centered" >
				<div class="text-bold text-center h4 text-fenk">Timeline</div>
			</div>
		</div>

	</div>
	<br/>
	<br/>








	<div class="container">
		<div class="columns">

			<div class="column col-6 col-md-12 p-centered">

				<!-- timeline -->
				<div class="timeline">
					<!-- Item 1 -->
					<div class="timeline-item" id="timeline-example-2">
						<div class="timeline-left"><a class="timeline-icon icon-lg tooltip" ><i class="icon icon-check"></i></a></div>
						<div class="timeline-content">
							<div class="tile">
								<div class="tile-content">
									<p class="tile-subtitle h6 text-bold">Elementary</p>
									<div class="parallax">
										<div class="parallax-top-left" tabindex="1"></div>
										<div class="parallax-top-right" tabindex="2"></div>
										<div class="parallax-bottom-left" tabindex="3"></div>
										<div class="parallax-bottom-right" tabindex="4"></div>
										<div class="parallax-content">
											<div class="parallax-front">
											</div>
											<div class="parallax-back">
												<img src="<?php echo $cdnimg; ?>assets/img/ele2.jpg" class="img-responsive rounded" ...>
											</div>
										</div>
									</div>
								</div>
								<div class="tile-action">
									<a class="btn btn-fenk" href="elementary.php">Browse</a>
								</div>
							</div>
						</div>
					</div>
					<!-- ITEM 2 -->
					<div class="timeline-item" id="timeline-example-2">
						<div class="timeline-left"><a class="timeline-icon icon-lg tooltip" ><i class="icon icon-check"></i></a></div>
						<div class="timeline-content">
							<div class="tile">
								<div class="tile-content">
									<p class="tile-subtitle h6 text-bold">JHS</p>
									<div class="parallax">
										<div class="parallax-top-left" tabindex="1"></div>
										<div class="parallax-top-right" tabindex="2"></div>
										<div class="parallax-bottom-left" tabindex="3"></div>
										<div class="parallax-bottom-right" tabindex="4"></div>
										<div class="parallax-content">
											<div class="parallax-front">
											</div>
											<div class="parallax-back">
												<img src="<?php echo $cdnimg; ?>assets/img/hs1.jpg" class="img-responsive rounded" ...>
											</div>
										</div>
									</div>
								</div>
								<div class="tile-action">
									<a class="btn btn-fenk" href="highschool.php">Browse</a>
								</div>
							</div>
						</div>
					</div>
					<!-- ITEM 3 -->
					<div class="timeline-item" id="timeline-example-2">
						<div class="timeline-left"><a class="timeline-icon icon-lg tooltip"><i class="icon icon-check"></i></a></div>
						<div class="timeline-content">
							<div class="tile">
								<div class="tile-content">
									<p class="tile-subtitle h6 text-bold">SHS</p>
									<div class="parallax">
										<div class="parallax-top-left" tabindex="1"></div>
										<div class="parallax-top-right" tabindex="2"></div>
										<div class="parallax-bottom-left" tabindex="3"></div>
										<div class="parallax-bottom-right" tabindex="4"></div>
										<div class="parallax-content">
											<div class="parallax-front">
											</div>
											<div class="parallax-back">
												<img src="<?php echo $cdnimg; ?>assets/img/shs1.jpg" class="img-responsive rounded" ...>
											</div>
										</div>
									</div>
								</div>
								<div class="tile-action">
									<a class="btn btn-fenk" href="seniorhighschool.php">Browse</a>
								</div>
							</div>
						</div>
					</div>
					<!-- ITEM 4 -->
					<div class="timeline-item" id="timeline-example-2">
						<div class="timeline-left"><a class="timeline-icon icon-lg tooltip" ><i class="icon icon-check"></i></a></div>
						<div class="timeline-content">
							<div class="tile">
								<div class="tile-content">
									<p class="tile-subtitle h6 text-bold">College</p>
									<div class="parallax">
										<div class="parallax-top-left" tabindex="1"></div>
										<div class="parallax-top-right" tabindex="2"></div>
										<div class="parallax-bottom-left" tabindex="3"></div>
										<div class="parallax-bottom-right" tabindex="4"></div>
										<div class="parallax-content">
											<div class="parallax-front">
											</div>
											<div class="parallax-back">
												<img src="<?php echo $cdnimg; ?>assets/img/col1.jpg" class="img-responsive rounded" ...>
											</div>
										</div>
									</div>
								</div>
								<div class="tile-action">
									<a class="btn btn-fenk" href="college.php">Browse</a>
								</div>
							</div>
						</div>
					</div>
					<!-- ITEM 2 -->

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
