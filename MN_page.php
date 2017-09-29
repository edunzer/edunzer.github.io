<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>MN_page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <link href="css/cp_css1.css" rel="stylesheet">
    <link href="css/cp_css2.css" rel="stylesheet">
    <link href="css/cp_css3.css" rel="stylesheet">
    <script src="js/cp_js1.js"></script>
    <link href="css/rpsgv2_css_3.css" rel="stylesheet">
    <link href="css/rpsgv2_css_2.css" rel="stylesheet">
    <script src="js/rpsgv2_js.js"></script>
    <link href="css/rpsgv2_css_1.css" rel="stylesheet">

  </head>

  <body>

    <?php
    include_once('navbar.php')
    ?>

    <div class="container">
      <div class="starter-template">
        <h1>Computers</h1>
        <h1></h1>
        <p class="lead">I think it's fair to say that personal computers have become the most empowering tool we've ever created. They're tools of communication, they're tools of creativity, and they can be shaped by their user.</p>
        <p>-Bill Gates</p>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Monitors for. <span class="text-muted">Days.</span></h2>
          <p class="lead">For many people the amount of monitors you have depends on what games you play, and this is true, but 4 monitors are great from a productivity stand point. By having so much screen relistate I am able to edit 3 web pages at the same time. I'm actually doing this as I'm typing this paragraph.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="pic/IMG_9409.JPG" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-4">
          <h2>Monitor 1</h2>
          <p><dr class="text-danger">-ASUS VN279Q Black 27" 5ms HDMI Widescreen LED </p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16824236342" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Monitor 2</h2>
          <p><dr class="text-danger">-ASUS VN279Q Black 27" 5ms HDMI Widescreen LED </p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16824236342" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Monitor 3</h2>
          <p><dr class="text-danger">-ASUS VN279Q Black 27" 5ms HDMI Widescreen LED </p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16824236342" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Monitor 4</h2>
          <p><dr class="text-danger">-ASUS VN279Q Black 27" 5ms HDMI Widescreen LED </p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16824236342" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Monitor Stand</h2>
          <p><dr class="text-danger">-Ergotech Triple Monitor TW Desk Stand </p>
          <p><a class="btn btn-default" href="http://shop.ergotechgroup.com/triple-monitor-stands-tw" role="button">Click to get product »</a></p>
        </div>
      </div>
    </div>


    <script src="js/cp_js2.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/cp_js3.js"></script>
    <script src="js/cp_js4.js"></script>
    <script src="js/dropdown.js"></script>


</body></html>
