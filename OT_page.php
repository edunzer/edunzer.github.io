<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>OT_page</title>

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
        <h1>Tools</h1>
        <h1></h1>
        <p class="lead">Do not wait; the time will never be 'just right.' Start where you stand, and work with whatever tools you may have at your command, and better tools will be found as you go along.</p>
        <p>-George Herbert</p>
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-4">
          <h2>USB Hub</h2>
          <p><dr class="text-danger">-TP-LINK 7-Port USB 3.0 Hub</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B00OTK16FK/ref=oh_aui_detailpage_o04_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Hdmi Cables</h2>
          <p><dr class="text-danger">-Aurum Ultra Series - High Speed HDMI Cable (x4)</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B00GR70UDW/ref=oh_aui_detailpage_o00_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Usb exstention cable</h2>
          <p><dr class="text-danger">-KabelDirekt (6 feet) USB 3.0 Extension Cable (x5)</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B00DI897N2/ref=oh_aui_detailpage_o09_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Audio exstention cable</h2>
          <p><dr class="text-danger">-KetDirect Audio headphone earphone Extension Cable</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B01CZOVA6G/ref=oh_aui_detailpage_o00_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Desk Grommet</h2>
          <p><dr class="text-danger">-2" Plastic Brush Desk Grommet (x2)</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B00M22ES48/ref=oh_aui_detailpage_o06_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>HDMI Coupler</h2>
          <p><dr class="text-danger">-Gold Plated HDMI Female Coupler (x4)</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B00CJHXY0U/ref=oh_aui_detailpage_o00_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-4">
          <h2>Philips Hue Bridge</h2>
          <p><dr class="text-danger">-Philips 458489 Hue Bridge</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B014H2P42K/ref=oh_aui_detailpage_o01_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Philips Hue Lightstrip Plus</h2>
          <p><dr class="text-danger">-Philips 800284 Hue Lightstrip Plus (x2)</p>
          <p><a class="btn btn-default" href="https://www.amazon.com/gp/product/B014H2OXYU/ref=oh_aui_detailpage_o01_s00?ie=UTF8&psc=1" role="button">Click to get product »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Philips Hue A19 Bulbs</h2>
          <p><dr class="text-danger">-Philips 456186 Hue White and Color A19 Bulbs (x3)</p>
          <p><a class="btn btn-default" href="" role="button">Click to get product »</a></p>
        </div>
      </div>
    </div>

    <script src="cp_js2.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="cp_js3.js"></script>
    <script src="cp_js4.js"></script>
    <script src="dropdown.js"></script>


</body></html>
