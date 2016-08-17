<?php
session_start();
?>

<html lang="en">

<head>
<!--http://corepower.com//wp-content/uploads/2016/02/moving-wallpaper-RAWS-2-NO-LEEPER-WEBM.webm-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CorePower</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
       <header>
        <div>
        <video autoplay="autoplay" muted="muted" loop="loop">
            <source src="http://corepower.com//wp-content/uploads/2016/02/moving-wallpaper-RAWS-2-NO-LEEPER-WEBM.webm" type="   video/webm">
            <source src="http://corepower.com//wp-content/uploads/2016/02/moving-wallpaper-RAWS-2-NO-LEEPER-MP4.mp4" type="video/mp4">
        </video>
        </div>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Welcome to CorePower</h1>
                <hr>
                <p>Welcome! Get Your Own Coupon For CorePower.</p>
                <?php

                if(isset($_SESSION['name']) && isset($_SESSION['user_id'])) //check whether user already logged in with twitter
                {
                	echo "Name :".$_SESSION['name']."<br>";
                	echo "Twitter ID :".$_SESSION['user_id']."<br>";
                	echo "<br/><a href='twitterlogin/logout.php'>Logout</a>";

                }

                ?>
                <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->
                <!--<div>
                  <a href="https://twitter.com/share" class="btn btn-primary btn-xl page-scroll" data-text="Guys, Check it out....." data-url="http://corepower.com" data-via="corepower" data-hashtags="EVERYDAYAWESOME #corepower" data-related="corepower,fairlife" data-show-count="false">Tweet</a>
                  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div> -->
                <div>
                  <br />
                </div>
                <div>
                  <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-text="Guys, Check it out....." data-url="http://corepower.com" data-via="corepower" data-hashtags="EVERYDAYAWESOME #corepower" data-related="corepower,fairlife" data-show-count="false">Tweet</a>
                  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div>
                  <br />
                </div>
                <div>
                  <a href="https://twitter.com/corepower" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @corepower</a>
                  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div>
                  <br />
                </div>
                <div>
                  <a href="directmessage.php" class="btn btn-primary btn-xl page-scroll">Direct Message</a>
                </div>
                <!-- <div>
                  <a href="https://twitter.com/messages/compose?recipient_id=480116063" data-size="xlarge" class="twitter-dm-button" data-screen-name="Cross_Viral" data-show-count="false" data-text="Guys, Check it out....." data-url="http://corepower.com" data-via="corepower" data-hashtags="EVERYDAYAWESOME #corepower" data-related="corepower,fairlife">Direct Message</a>
                  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div> -->

            </div>
        </div>
    </header>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://www.corepower.com/">CorePower</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

-->


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
