<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>Home_page</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <link href="css/rpsgv2_css_3.css" rel="stylesheet">
    <link href="css/rpsgv2_css_2.css" rel="stylesheet">
    <script src="js/rpsgv2_js.js"></script>
    <link href="css/rpsgv2_css_1.css" rel="stylesheet">

  </head>

  <body>

    <?php
    include_once('navbar.php')
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="third-slide" src="simple-grey-wallpaper-8113.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>WELCOME.</h1>
              <h1> </h1>
              <p>“When you don't create things, you become defined by your tastes rather than ability. Your tastes only narrow and exclude people. so create.”</p>
              <p>― Jonathan Gillette</p>
              <p><a class="btn btn-lg btn-primary" href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=Jonathan+Gillette" role="button">More Information</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="pic/gray-background-3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>HTML</h2>
          <p>As a future web deisgner HTML is one of the most important languages to learn. Not onyl is it a vital language to learn, but it is the foundation of every website that is on the enternet today.</p>
          <p><a class="btn btn-default" href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=Html" role="button">See more details about HTML »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="pic/plain_eggshell_background_by_hardwayjackson-d3etb0i.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Programming</h2>
          <p>The future of human civiliztion is all about technology. We are already so reliant on technology, so when it comes time that i need a career coding and programming is were im going. By learning a trade that will last for a long time you can garentee yourslef a career.</p>
          <p><a class="btn btn-default" href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=programming" role="button">Learn more about coding »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="pic/gray-background-3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Design</h2>
          <p>Throught marketing class one of the most important things that you learn is that if your product design is not a pealing to a large group of people the product will never sell. So in order to have a sucsesful bissness or career having a good idea of how to design is important.</p>
          <p><a class="btn btn-default" href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=design" role="button">Design is hard to learn, but you can try »</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">What is. <span class="text-muted">Web Design.</span></h2>
          <p class="lead">Web design is a process of conceptualizing, planning, and building a collection of electronic files that determine the layout, colors, text styles, structure, graphics, images, and use of interactive features that deliver pages to your site visitors.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="pic/Awesome-Web-Design.png" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Create anything you can imagine.<span class="text-muted"> Anywhere you are.</span></h2>
          <p class="lead">The world’s best imaging and design app is at the core of almost every creative project. Work across desktop and mobile devices to create and enhance your photographs, website and mobile app designs, 3D artwork, videos and more.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="pic/Adobe_Photoshop_CS6_icon.svg.png" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">What is. <span class="text-muted">Marketing.</span></h2>
          <p class="lead">The action or business of promoting and selling products or services, including market research and advertising.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" alt="500x500" src="pic/internet-marketing-1.png" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">

      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Edunzer Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div>
  </body>

    <script src="js/rpsgv2_js_2.js"></script>
    <script src="js/rpsgv2_js_3.js"></script>
    <script src="js/rpsgv2_js_4.js"></script>
    <script src="js/rpsgv2_js_5.js"></script>
    <script src="js/dropdown.js"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>
