<?php include "member/db.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity Donation App</title>


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

                <div id="fh5co-blog-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section desc animate-box">
                                <h3>Donate. Love.</h3>
                                <p>여러분의 코인이 사랑을 만듭니다.</p>
																<a class="btn btn-primary btn-lg" href="contract.php">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row-bottom-padded-md">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_1.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>강원도 산불 긴급 지원 캠페인</a></h3>
                                            <span class="posted_by">Until July. 21th</span>
                                            <span class="comment"><a href="">12524<i class="icon-bubble2"></i></a></span>
                                            <p>밤사이 강원도를 덮친 전에 없던 불길에 지역 주민들과 아이들은 큰 심리적 공황 상태를 겪고 있으며 기본적인 물품들을 챙기지 못해 일상 생활이 모두 무너져내린 상황입니다. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_2.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>저소득가정 육아 지원 캠페인</a></h3>
                                            <span class="posted_by">Until Aug. 18th</span>
                                            <span class="comment"><a href="">2361<i class="icon-bubble2"></i></a></span>
                                            <p>할아버지의 손녀 소봄이의 양육으로 쌓여가는 빚과 밀린 공과금으로 숨이 턱턱 막히는 현실이지만, 손녀를 지키고 싶은 할아버지 다짐이 지켜지도록 소봄이네 가정에 힘을 보태주세요.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_3.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>한부모 가정 지원 캠페인</a></h3>
                                            <span class="posted_by">Until June. 16th</span>
                                            <span class="comment"><a href="">769<i class="icon-bubble2"></i></a></span>
                                            <p>갓 스무 살이 된 어린 엄마와 아기는 모텔 화장실 바닥에서 만났습니다. 아기는 엄마와 같이 모텔에서 지낼 수 없는 상황입니다. 이들이 같이 살 수 있도록 힘이 되어주세요.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>국내 위기 아동 지원 캠페인</a></h3>
                                            <span class="posted_by">Until Sep. 1st</span>
                                            <span class="comment"><a href="">624<i class="icon-bubble2"></i></a></span>
                                            <p>백혈병을 앓는 5살 승희의 엄마는 승희가 태어나는 날 식물인간이 되었습니다. 쌓여가는 병원비에 승희의 아빠는 일터로 나가 원치않은 이별을	겪고있습니다. 어려운 상황 속에서 승희 가족이 희망을 잃지 않도록 힘이 되어주세요.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_5.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>세계 난민의 날 캠페인</a></h3>
                                            <span class="posted_by">Until June. 20th</span>
                                            <span class="comment"><a href="">616<i class="icon-bubble2"></i></a></span>
                                            <p>탄자니아에서의 난민들은 20년째 외부자원에 의존하여 원주민에게 피해를 입히고 있습니다. 난민과 원주민의 갈등을 완화하기 위해 '시장 활성화 사업'을 진행합니다. 난민에게는 자립의 기반을, 원주민에게는 지역 경제 발전의 힘이 되어주세요.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_6.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>식수위생지원 캠페인</a></h3>
                                            <span class="posted_by">Until Oct. 13th</span>
                                            <span class="comment"><a href="">602<i class="icon-bubble2"></i></a></span>
                                            <p>알목타는 오늘도 살기 위해 물을 길으러 갑니다. 잠시만 걸어도 숨이 턱턱 막히는 날씨... 마을 앞의 고장난 우물을 대신할 진흙탕 물웅덩이를 몇시간 동안 찾아다닙니다. 아직도 더러운 물을 마셔야 하는 아이들에게 깨끗한 물을 선물해주세요.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_7.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>보건의료지원 캠페인</a></h3>
                                            <span class="posted_by">Until Aug. 11th</span>
                                            <span class="comment"><a href="">581<i class="icon-bubble2"></i></a></span>
                                            <p>아프리카에서도 가장 빈곤한 국가이자 세계에서 가장 수명이 낮은 나라, 차드. 차드의 병원은 가장 절박한 순간에 찾는 곳이지만, 정부의 지원이 중단되어 희망을 찾기 어려워졌습니다. 빈곤으로 아이들을 잃지 않도록 손을 잡아주세요. </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-md-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_8.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>학대피해아동 지원 캠페인</a></h3>
                                            <span class="posted_by">Until Nov. 15th</span>
                                            <span class="comment"><a href="">1077<i class="icon-bubble2"></i></a></span>
                                            <p>스케치북이 된 낙서 가득한 벽, 쓰레기가 나뒹구는 반 지하 셋방. 15년째 우을증 약을 먹고 있는 무기력한 엄마에게 방임된 5살 다현이의 유일한 보금자리입니다. 다현이가 지금보다 안전한 집에서 성장할 수 있도록 함께 해주세요.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog_9.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href="" #>유기된 아동 지원 캠페인</a></h3>
                                            <span class="posted_by">Until Nov. 15th</span>
                                            <span class="comment"><a href="">1221<i class="icon-bubble2"></i></a></span>
                                            <p>2017년 보건복지부에 따르면, 유기된 학대피해아동은 총 261명이라고 합니다. 이 아이들은 유기로 인한 평생 지워지지 않는 아픈 기억을 가지고 자라야 합니다. 이 학대피해아이들의 옆에 서서 아픈 기억을 공감하며 함께 보듬어주세요.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
	<!-- END fh5co-page -->
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
