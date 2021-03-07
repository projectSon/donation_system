<?php
include "member/db.php";
// mysqli TEST
//if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//    echo 'We don\'t have mysqli!!!';
//} else {
//    echo 'Phew we have it!';
//}
?>
<!DOCTYPE html>
 <html class="js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CC Donation</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
    <!-- Top blue line -->
		<div id="fh5co-wrapper">
		    <div id="fh5co-page">
          <div class="header-top">
            <!-- TOP LINE -->
          </div>
          <header id="fh5co-header-section" class="sticky-banner">
      			<div class="container">
      				<div class="nav-header">
      					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
      					<h1 id="fh5co-logo"><a>Coin Chain</a></h1>

      					<!-- START menu-->
      					<nav id="fh5co-menu-wrap" role="navigation">
      						<ul class="sf-menu" id="fh5co-primary-menu">
                    <li class="active">
                      <?php
                      if(isset($_SESSION['userid'])){
                        echo "<a>{$_SESSION['userid']}님 환영합니다.</a>";
                      }
                      ?>
                    </li>
                    <li><a href="index.php">Home</a><li>
                    <li><a href="donation.php">Donation</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="active">
                      <?php
                      if(isset($_SESSION['userid'])){
                        echo '<a href="member/logout.php">Logout</a>';
                      } else{
                        echo '<a href="member/login.php">Login</a>';
                      }
                      ?>
                    </li>
      						</ul>
      					</nav>
      				</div>
      			</div>
      		</header>
		    </div>
		</div>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="desc animate-box">
					<h2><strong>Coin Chain, a messenger of love</strong></h2>
				</div>
			</div>
		</div>

		<!--content-section -->

		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Our Projects. Support Us</h3>
						<p>CC는 기부 플랫폼에 블록체인 기술을 도입함으로서 기부금의 흐름에 투명성을 보장하여 기부자들에게 신뢰를, 수혜자들에게는 보장된 혜택의 제공이 목표입니다.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Water Project In Coin</h3>
							<p>Writing content</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Giving</h3>
							<p>Writing content</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Shelter Giving</h3>
							<p>Writing content</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Water Project</h3>
							<p>Writing content</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Personal to Personal</h3>
							<p>Writing content</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-heart"></i></span>
							<h3>Midical Mission</h3>
							<p>Writing content</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END What we do -->





	</div>
	<!-- END page -->

	</div>
	<!-- END wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>
