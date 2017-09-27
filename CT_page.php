<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>CT_page</title>

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
        <h1>Knowledge</h1>
        <h1></h1>
        <p class="lead">For good ideas and true innovation, you need human interaction, conflict, argument, debate.</p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <h2>Email</h2>
          <h2></h2>
          <h2></h2>
          <p>ethandunzer@gmail.com<dr class="text-danger">  -- main email</p>
          <p>ethandunzer@yahoo.com<dr class="text-danger">  -- commerical email</p>
          <p>ethandunzer@outlook.com<dr class="text-danger">  -- tech email</p>
        </div>
        <div class="col-lg-4">
          <h2>Phone</h2>
          <h2></h2>
          <h2></h2>
          <p>503-318-0942<dr class="text-danger">  -- personal phone</p>
       </div>
        <div class="col-lg-4">
          <h2>Social</h2>
          <h2></h2>
          <h2></h2>
          <p>ethan dunzer<dr class="text-danger">  -- facebook</p>
          <p>edunzer<dr class="text-danger">  -- instagram</p>
          <p>ethan_dunzer<dr class="text-danger">  -- twitter</p>
          <p>ethan dunzer<dr class="text-danger">  -- steam id</p>
          <p>ethandunzer<dr class="text-danger">  -- origin</p>
        </div>
      </div>

    </div>

    <script src="cp_js2.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="cp_js3.js"></script>
    <script src="cp_js4.js"></script>
    <script src="dropdown.js"></script>


</body></html>
