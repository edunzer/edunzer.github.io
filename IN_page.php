<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>IN_page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <link href="rpsgv2_css_3.css" rel="stylesheet">
    <link href="rpsgv2_css_2.css" rel="stylesheet">
    <script src="rpsgv2_js.js"></script>
    <link href="rpsgv2_css_1.css" rel="stylesheet">

  </head>

  <body>

    <?php
    include_once('navbar.php')
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="third-slide" src="gray-background-3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>INTERESTS</h1>
              <h1></h1>
              <p>“The difference between a Designer and Developer, when it comes to design skills, is the difference between shooting a bullet and throwing it.”</p>
              <p>― Scott Hanselman</p>
              <p><a class="btn btn-lg btn-primary" href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=Scott+Hanselman" role="button">More Information</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container marketing">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Favorite car. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">The 1967 NOVA is by far the best designer car that someone can have. For most, old cars are something that should stay in the past but for me the nova is something that can be made practicle.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="Picture20117.jpg" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Ideal house design. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Studio apartments are typically only one room, but the ideal apartment is one that has the style of the studio but with more than one room.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="Stylish-Vancouver-apartment-with-a-trendy-living-space.jpg" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Computer setup. <span class="text-muted">Clean and Easy.</span></h2>
          <p class="lead">Computer setups are much like apertemts, the clean and simple ones are the most functional. To have a good setup you have to have the modern feel with simplicity but still have the equipment that allows you to work.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="maxresdefault.jpg" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Shoes.<span class="text-muted">Simple and Comfortabe</span></h2>
          <p class="lead">Nike Free is a minimalist running shoe. It was introduced in 2005 after Nike representatives observed Nike sponsored track athletes training barefoot. The numbering system indicates the cushioning of the shoe and follows a scale ranging from 0 to 10. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="multicolor-nike-free-4-0-flyknit-04-900x599.jpg" data-holder-rendered="true">
        </div>
      </div>

      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Edunzer Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div>


    <script src="rpsgv2_js_2.js"></script>
    <script src="rpsgv2_js_3.js"></script>
    <script src="rpsgv2_js_4.js"></script>
    <script src="rpsgv2_js_5.js"></script>
    <script src="dropdown.js"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>
