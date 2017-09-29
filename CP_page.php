<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>CP_page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

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
          <h2 class="featurette-heading">Desk. <span class="text-muted">Cool and Simple.</span></h2>
          <p class="lead">For many a desk is a place to get work and homework done. For me i like to use my desk for work and play. Having a simple and clean setup allows you to have both functional and confortable setup. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="pic/IMG_9417.JPG" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-4">
          <h2>Motherboard</h2>
          <p><dr class="text-danger">-MSI X99A SLI Plus</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16813130841" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>CPU</h2>
          <p><dr class="text-danger">-Intel i7 5820K</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16819117402&cm_re=i7_5820K-_-19-117-402-_-Product" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Memory</h2>
          <p><dr class="text-danger">-Corsair Vengence LPX 4x4</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16820233899&cm_re=CORSAIR_Vengeance_LPX-_-20-233-899-_-Product" role="button">Click to get product »</a></p>
        </div>
      </div>
       <div class="row">
        <div class="col-lg-4">
          <h2>Graphics Cards</h2>
          <p><dr class="text-danger">-EVGA Gtx 780</p>
          <p><dr class="text-danger">-EVGA Gtx 780</p>
          <p><a class="btn btn-default" href="http://www.amazon.com/EVGA-GeForce-GTX780-SuperClocked-03G-P4-2784-KR/dp/B00CUIVSNS/ref=sr_1_1?s=pc&ie=UTF8&qid=1454947226&sr=1-1&keywords=gtx+780" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Power Supply</h2>
          <p><dr class="text-danger">-Corsair RM1000</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16817139057&cm_re=Corsair_RM1000-_-17-139-057-_-Product" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>SSD</h2>
          <p><dr class="text-danger">-Samsung 950 pro 250gb</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16820147466&cm_re=samsung_950_pro-_-20-147-466-_-Product" role="button">Click to get product »</a></p>
          <p><dr class="text-danger">-Intel 730 Series 240gb</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16820167190" role="button">Click to get product »</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <h2>Computer Case</h2>
          <p><dr class="text-danger">-Corsair Carbibe Air 540</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16811139022" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>CPU Cooler</h2>
          <p><dr class="text-danger">-Corsair H105</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16835181060&cm_re=Corsair_H105-_-35-181-060-_-Product" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Fan Controller</h2>
          <p><dr class="text-danger">-Alman 6 channel, Multi fan controller</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16811999171" role="button">Click to get product »</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <h2>Power Supply Cables</h2>
          <p><dr class="text-danger">-Corsair CP-8920050 Standard Power Cable Kit, White</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B00BJMDISO/ref=oh_aui_detailpage_o00_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
          <p><dr class="text-danger">-Corsair Individually Sleeved 24pin ATX Cable, White</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B00BSQZEJM/ref=oh_aui_detailpage_o00_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
      </div>



    </div>

    <script src="js/cp_js2.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/cp_js3.js"></script>
    <script src="js/cp_js4.js"></script>
    <script src="js/dropdown.js"></script>


</body></html>
