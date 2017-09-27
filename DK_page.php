<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>DK_page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <link href="cp_css1.css" rel="stylesheet">
    <link href="cp_css2.css" rel="stylesheet">
    <link href="cp_css3.css" rel="stylesheet">
    <script src="cp_js1.js"></script>
    <link href="rpsgv2_css_3.css" rel="stylesheet">
    <link href="rpsgv2_css_2.css" rel="stylesheet">
    <script src="rpsgv2_js.js"></script>
    <link href="rpsgv2_css_1.css" rel="stylesheet">

  </head>

  <body>

    <?php
    include_once('navbar.php')
    ?>

    <div class="container">
      <div class="starter-template">
        <h1>Workspace</h1>
        <h1></h1>
        <p class="lead">“Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do.”</p>
        <p>-Steve Jobs</p>
      </div>

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Desk. <span class="text-muted">Cool and Simple.</span></h2>
          <p class="lead">For many a desk is a place to get work and homework done. For me i like to use my desk for work and play. Having a simple and clean setup allows you to have both functional and confortable setup. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="aviation03.jpg" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-4">
          <h2>Desk Top</h2>
          <p><dr class="text-danger">-JELD WEN 36in. x 96in Woodgrain Flush</p>
          <p><a class="btn btn-default" href="http://www.homedepot.com/p/Masonite-36-in-x-80-in-Smooth-Flush-Hardboard-Solid-Core-Birch-Veneer-Composite-Interior-Door-Slab-104280/100064572" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Table Legs</h2>
          <p><dr class="text-danger">-Autonomous DIY SmartDesk Kit</p>
          <p><a class="btn btn-default" href="https://www.autonomous.ai/diy-smart-desk-kit-electric-sit-to-stand-automatic-frame" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Power Strip</h2>
          <p><dr class="text-danger">-15-Amp 15 ft. Surge Power Strip with 16 Outlets</p>
          <p><a class="btn btn-default" href="http://www.homedepot.com/p/Tripp-Lite-15-Amp-15-ft-Cord-450-Joules-Surge-Power-Strip-with-16-Outlets-SS7415-15/203348199" role="button">Click to get product »</a></p>
        </div>
      </div>
    </div>

    <script src="cp_js2.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="cp_js3.js"></script>
    <script src="cp_js4.js"></script>
    <script src="dropdown.js"></script>


</body></html>
