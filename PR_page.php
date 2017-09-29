<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>PR_page</title>

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
        <h1>Tools</h1>
        <h1></h1>
        <p class="lead">Do not wait; the time will never be 'just right.' Start where you stand, and work with whatever tools you may have at your command, and better tools will be found as you go along.</p>
        <p>-George Herbert</p>
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-4">
          <h2>Keyboard</h2>
          <p><dr class="text-danger">-Corsair Gaming K70 RGB Mechanical Gaming Keyboard</p>
          <p><a class="btn btn-default" href="http://www.amazon.com/gp/product/B014W1YUAS?keywords=corsair%20k70%20rgb&qid=1454982692&ref_=sr_1_1&s=videogames&sr=1-1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Mouse</h2>
          <p><dr class="text-danger">-Corsair Gaming M65 RGB FPS PC Gaming Laser Mouse, Black</p>
          <p><a class="btn btn-default" href="http://www.amazon.com/gp/product/B00N4OBEJA?psc=1&redirect=true&ref_=oh_aui_detailpage_o07_s00" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Mouse Pad</h2>
          <p><dr class="text-danger">-Corsair Vengeance MM200 CH-9000014-WW XL Gaming Mouse Mat</p>
          <p><a class="btn btn-default" href="http://www.newegg.com/Product/Product.aspx?Item=N82E16826988019" role="button">Click to get product »</a></p>
        </div>
      </div>
    </div>

    <script src="js/cp_js2.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/cp_js3.js"></script>
    <script src="js/cp_js4.js"></script>
    <script src="js/dropdown.js"></script>


  </body>
</html>
