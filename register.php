<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	$sql = "INSERT INTO `user` (username, email, password) VALUES ('$username', '$email', '$password')";
	$result = mysqli_query($connection, $sql);
	if($result){
		$smsg = "User Registration successfull";
		header('location: Home_Page.php');
	}else{
		$fmsg = "User registration failed";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<script src="js/js_1.js" ></script>
	<link rel="stylesheet" href="css/css_3.css">
	<link rel="stylesheet" href="css/css_1.css">
	<link rel="stylesheet" href="css/css_2.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">></span>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
</div>
</body>
</html>
