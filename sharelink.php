<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['user_id'])) //check whether user already logged in with twitter
{

header('Location: index.html');

}
if(isset($_SESSION['gmc_']))
{
  echo "<script>",
  "window.onload = function(){ ",
    "document.getElementById('gmcdiv').style.display = 'block';",
    "document.getElementById('gmcdiv1').style.display = 'block';",
   "document.getElementById('hid').style.display = 'none';",
    "};",
  "</script>";
  unset($_SESSION['gmc_']);
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
              <div id="gmcdiv1"  style="display:none;"> 
                  <h1> THANKS!</h1>
                  <hr>
                  <p>Send another coupon or claim your case now
                  (Limit one case per person. If you send more coupons, THANKS! But we can only provide one case per person…)</p>
              </div>
              <div id = "hid">
                <h1 id="homeHeading">YOU’RE JUST A TWEET AWAY...</h1>
                <hr>
                <p>Tell your friends about Core Power and send them a coupon as well...</p>
              </div>

                <div>
                  <br />
                </div>
                <div>
                  <a href="https://twitter.com/share" class="twitter-share-button page-scroll" data-size="large" data-text="Guys, Check it out....." data-url="http://corepower.com" data-via="corepower" data-hashtags="EVERYDAYAWESOME #corepower" data-related="corepower,fairlife" data-show-count="false">Tweet</a>
                  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div>
                  <br />
                </div>

                <div>
                  <a id="dm" href="directmessage.php" class="btn btn-primary btn-xl page-scroll">DIRECT MESSAGE</a>
                </div>
                <br  />
                <div id="gmcdiv"  style="display:none;">
                <!--  <a id="gmc" href="Usraddress.html" class="btn btn-primary btn-xl page-scroll" >Get my CorePower</a> -->
                  <button type="button" id="gmc" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" data-target="#myModal">GET MY CASE!</button>
                </div>

            </div>
        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Core Power Case Delivery</h4></h4>
          </div>
          <div class="modal-body">
            <p>Complete your shipping address (Street addresses only, no PO Boxes, please!)</p>
            <form role="form">
              <div class="form-group">
                <label for="Address">Address</label>
                  <input type="text" class="form-control"
                  id="Address" placeholder="Address"/>
              </div>
              <div class="form-group">
                <label for="City">City</label>
                  <input type="text" class="form-control"
                      id="City" placeholder="City"/>
              </div>
              <div class="form-group">
                <label for="State">State</label>
                  <input type="text" class="form-control"
                      id="State" placeholder="State"/>
              </div>
              <div class="form-group">
                <label for="Zip">Zip</label>
                  <input type="text" class="form-control"
                      id="Zip" placeholder="Zip"/>
              </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>

      </form>
    </div>
        </div>
      </div>
    </div>

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
    </nav>
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
