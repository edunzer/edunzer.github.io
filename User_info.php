<?php
session_start();
if(isset($_SESSION['username'])) {
}else{
  header('location: login.php');
}
?>
<html lang="en">
  <head>

    <title>User_info</title>

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
        <h1>Knowledge</h1>
        <h1></h1>
        <p class="lead">For good ideas and true innovation, you need human interaction, conflict, argument, debate.</p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h2>Username</h2>
          <h2></h2>
          <h2></h2>
          <p><?php if(isset($_SESSION['username'])) {echo $_SESSION['username'];}else{echo "No username found";} ?><dr class="text-danger">  -- Current Username</p>
        </div>
        <div class="col-lg-4">
          <h2>Email</h2>
          <h2></h2>
          <h2></h2>
          <p><?php if(isset($_SESSION['username'])) {echo $_SESSION['email'];}else{echo "No username found";} ?><dr class="text-danger">  -- Current Email</p>
       </div>
        <div class="col-lg-4">
          <h2>Password</h2>
          <h2></h2>
          <h2></h2>
          <p><?php if(isset($_SESSION['username'])) {echo $_SESSION['password'];}else{echo "No password found";} ?><dr class="text-danger">  -- Current Password</p>
        </div>
      </div>

    </div>

    <script src="js/cp_js2.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/cp_js3.js"></script>
    <script src="js/cp_js4.js"></script>
    <script src="js/dropdown.js"></script>


</body></html>
