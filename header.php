<?php
	$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	</head>
	<body >

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header >

				<div class="header-top">
					<div class="container flex flex-space-between">
						 <!--mob button-->
						<div class="mob-menu-bar desktop-hide" onclick="myFunction(this)">
							<div class="bar1"></div>
							<div class="bar2"></div>
							<div class="bar3"></div>
						</div>

						<script>
							function myFunction(x) {
								x.classList.toggle("change");
							}
						</script>
						<!--/mob button-->

						<div class="header-top_left flex flex-vertical-center">
							<!-- logo -->
							<div class="logo">
								<a href="/">
								    <img src="<?php echo $base_url; ?>/assets/images/logo.svg" alt="Tumbles" class="logo-img">
								</a>
							</div>
							<!-- /logo -->

							<span class="phone mobile-hide">
								<a href="tel:+18334967836"><i class="fas fa-phone-alt"></i> +1 833 496 7836</a>
							</span>

							<span class="email mobile-hide">
								<a href="mailto:info@website.com"><i class="fas fa-envelope"></i> info@website.com</a>
							</span>

							<span class="location mobile-hide">
								<a href="#"><i class="fas fa-globe-americas"></i> Our location</a>
							</span>
						</div><!-- /header-top_left -->

						<div class="header-top_right flex flex-vertical-center">
							<div class="socials mobile-hide">
								<a href="#" target="_blank">
									<i class="fab fa-facebook-square"></i>
								</a>
								<a href="#">
									<i class="fab fa-instagram-square"></i>
								</a>
								<a href="#">
									<i class="fab fa-youtube"></i>
								</a>
							</div><!-- socials -->

							<div class="my-account mobile-hide">
								<a href="#">My Account</a>
							</div>

							<div class="cart">
								<a href="#">
									<i class="fas fa-shopping-cart"></i>
									<span class="count-items">(1)</span>
								</a>
							</div>

							<div class="language-switcher">
								
							</div>
						</div><!-- /header-top_right -->
					</div><!-- container -->
				</div><!-- header-top -->


				<div class="header-bottom">
					<div class="container">
						<nav>
							<ul class="flex">
								<li><a href="">Calendar</a></li>
								<li class="has-children">
									<a href="gym-classes.php">Gym Classes</a>
									<div class="mega-menu">
										<ul class="sub-menu">
											<li><a href="#">Parent / Child  (4 mo - 3 y)</a></li>
											<li><a href="#">Preschool Classes (4-6 y)</a></li>
											<li><a href="#">Grade School Classes (7-12 y)</a></li>
										</ul>
									</div>
								</li>
								<li><a href="steam-classes.php">STEAM Classes</a></li>
								<li><a href="">Parties & Camps</a></li>
								<li><a href="">Tumble Zone</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Blog</a></li>
								<li><a href="" class="btn">Try us out</a></li>
							</ul>
						</nav>

					</div>
				</div><!-- header-bottom -->

				<img src="<?php echo $base_url; ?>/assets/images/header-waves.svg"  class="header-waves mobile-hide">

			</header>
			<!-- /header -->
	

			<div class="body-content">
