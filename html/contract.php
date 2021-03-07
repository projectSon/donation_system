<?php include "member/db.php"; ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <title>Charity Donation App</title>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .box {
            z-index: 2;
            font-size: 18px;
            text-transform: uppercase;
            margin-top: 22px;
            font-weight: 700;
            float: left;
            color: #5A5A5A;
        }
    </style>

    <script type="module" src="js/contract.js"></script>
    <script>alert('CC 기부 플랫폼은 Metamask 프로그램을 필요로 하며, 프로그램 미설치시 기부를 진행할 수 없습니다. 설치 확인 후 진행하시기 바랍니다.')</script>

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
                    <div class="desc animate-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h1 id="fh5co-logo">Donation Process App</h1>
                                </div>

                                <br />
                                <br />
                                <br />
                                <br />

                                <div class="col-md-4">
                                    <span class="box">You have<strong><b> <span id="balance"></span></b></strong> Coins</span>
                                </div>

                                <br />
                                <br />
                                <br />
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="uniqueID">Unique ID: </label>         `
                                        <input class="form-control" type="text" id="uniqueID" placeholder="e.g.,2k29mdxn1">
                                    </div>

                                    <button class="btn btn-primary btn-lg" id="getUniqueID" onclick="App.generateID()">Get Unique Transaction ID</button>
                                    <button class="btn btn-primary btn-lg" id="getInfoByID" onclick="App.getInfoByID()">Track Money</button>

                                    <div class="form-group">
                                        <br />
                                        <label for="amount"> Amount: </label>
                                        <input class="form-control" type="text" id="amount" placeholder="e.g., 95">
                                    </div>

                                    <div class="form-group">

                                        <label for="receiver">To Address: </label>
                                        <input class="form-control" type="text" id="receiver" placeholder="e.g., 0x93e66d9baea28c17d9fc393b53e3fbdd76899dae">
                                    </div>

                                    <div class="form-group">

                                        <label for="locationName">Name: </label>
                                        <input class="form-control" type="text" id="locationName" placeholder="Location name">
                                    </div>


                                    <button class="btn btn-primary btn-lg" id="getPrevious" onclick="App.getPreviousInfo()">Show Received Money</button>
                                    <button class="btn btn-primary btn-lg" id="send" onclick="App.sendCoin()">Send Coins</button>

                                    <span id="status"></span>

                                    <button class="btn btn-primary btn-lg" id="getAccount" onclick="App.getAccount()">Get the current account</button>

                                </div>
                            </div>
                            <br />
                            <br />
                            <div>
                              <a href="https://metamask.io">Metamask Download link Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
