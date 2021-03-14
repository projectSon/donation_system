<?php include "member/db.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Donation Process App</title>
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
                        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5">
                            <div class="desc animate-box">
                                <span><h1>We're in moving on, Soon! :)</h1></span>
																<span><a>- 준비중입니다 -</a></span>
                            </div>
                        </div>

                    </div>

                    <div id="fh5co-contact" class="animate-box">
                        <div class="container">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="section-title">Our Address</h3>
                                        <p>( ! ) 보금자리를 현재 준비중입니다. </p>
                                        <ul class="contact-info">
                                            <li><i class="icon-location-pin"></i> 어쩌면 당신의 집 앞 마트의 맞은 편 옆 빌딩에 있을지도?</li>
                                            <li><i class="icon-phone2"></i>+ 486</li>
                                            <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
                                            <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- END fh5co-page -->

            </div>
            <!-- END fh5co-wrapper -->
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
