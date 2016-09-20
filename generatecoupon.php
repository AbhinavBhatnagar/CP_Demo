<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['user_id'])) //check whether user already logged in with twitter
{

header('Location: index.html');

}
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
    <link href="css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
       <header>
        <div class="fullscreen-bg">
        <video autoplay="autoplay" muted="muted" loop="loop">
            <source src="http://corepower.com//wp-content/uploads/2016/02/moving-wallpaper-RAWS-2-NO-LEEPER-WEBM.webm" type="   video/webm">
            <source src="http://corepower.com//wp-content/uploads/2016/02/moving-wallpaper-RAWS-2-NO-LEEPER-MP4.mp4" type="video/mp4">
        </video>
        </div>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">TELL YOUR FRIENDS!</h1>
                <hr>

                <p>We’re excited to send you a case of CP just for helping us spread the word...</p>
                <div> <a href="ShootQuery.php" class="btn btn-primary btn-xl page-scroll">Send your message NOW!</a></div>
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
        </div>
        <!-- /.container-fluid -->
    </nav>


    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">HIGH PROTEIN MILK SHAKES</h2>
                    <hr class="light">
                    <p class="text-faded">REAL MILK. SIMPLE INGREDIENTS. GREAT TASTE.</p>
                    <a href="#center-wrap" class="page-scroll btn btn-default btn-xl sr-button">Find your CorePower flavor!</a>
                </div>
            </div>
        </div>
    </section>


<div class="products">
    <div class="center-wrap">
<ul>
<li class="product-17"><a href="http://www.corepower.com/our-products/chocolate/">
  <img width="136" height="291" src="http://www.corepower.com/wp-content/uploads/2015/06/Chocolate_small.png" class="attachment-full size-full" alt="Chocolate_small">
  <p>
    <span>
      <span>Chocolate</span>
    </span>
  </p>
</a>
</li>
<li class="product-10">
  <a href="http://www.corepower.com/our-products/vanilla/">
    <img width="136" height="291" src="http://www.corepower.com/wp-content/uploads/2015/06/Vanilla_small.png" class="attachment-full size-full" alt="Vanilla_small">
    <p>
      <span>
        <span>Vanilla</span>
      </span>
    </p>
  </a>
</li>
<li class="product-27"><a href="http://www.corepower.com/our-products/banana/"><img width="136" height="291" src="http://www.corepower.com/wp-content/uploads/2015/06/Banana_small.png" class="attachment-full size-full" alt="Banana_small"><p><span><span>Banana</span></span></p></a></li><li class="product-30"><a href="http://www.corepower.com/our-products/strawberry-banana-light/"><img width="136" height="291" src="http://www.corepower.com/wp-content/uploads/2015/06/StrawberryBananaLight_small.png" class="attachment-full size-full" alt="StrawberryBananaLight_small"><p><span><span>Strawberry Banana Light</span></span></p></a></li><li class="product-33"><a href="http://www.corepower.com/our-products/chocolate-light/"><img width="136" height="291" src="http://www.corepower.com/wp-content/uploads/2015/06/ChocolateLight_small.png" class="attachment-full size-full" alt="ChocolateLight_small"><p><span><span>Chocolate Light</span></span></p></a></li><li class="product-24238"><a href="http://www.corepower.com/our-products/elite-chocolate/"><img width="118" height="303" src="http://www.corepower.com/wp-content/uploads/2016/02/elite-chocolate-listing.png" class="attachment-full size-full" alt="elite-chocolate-listing" srcset="http://www.corepower.com/wp-content/uploads/2016/02/elite-chocolate-listing.png 118w, http://www.corepower.com/wp-content/uploads/2016/02/elite-chocolate-listing-117x300.png 117w" sizes="(max-width: 118px) 100vw, 118px"><p><span><span>ELITE Chocolate</span></span></p></a></li><li class="product-24307"><a href="http://www.corepower.com/our-products/elite-vanilla/"><img width="119" height="303" src="http://www.corepower.com/wp-content/uploads/2016/02/elite-vanilla-listing.png" class="attachment-full size-full" alt="elite-vanilla-listing" srcset="http://www.corepower.com/wp-content/uploads/2016/02/elite-vanilla-listing.png 119w, http://www.corepower.com/wp-content/uploads/2016/02/elite-vanilla-listing-118x300.png 118w" sizes="(max-width: 119px) 100vw, 119px"><p><span><span>ELITE<br>Vanilla</span></span></p></a></li> </ul>
</ul>
</div>
</div>


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
