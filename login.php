<?php
session_start();
require_once('connect.php');

if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	$sql = "SELECT * FROM `user` WHERE username='$username' AND password='$password' AND email='$email'";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
		header('location: Home_Page.php');
	}else{
		$fmsg = "Invalid Username/Password";
	}
}
if(isset($_SESSION['username'])){
	$smsg = "User already logged in";
	header('location: Home_Page.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login in</title>
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
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">></span>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>

        <label for="inputPassword" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <button class="btn btn-lg btn-primary btn-block" id="button#2">Register</button>
		<script type="text/javascript">
            document.getElementById("button#2").onclick = function () {
                location.href = "register.php";
            };
        </script>
        <h2 class="form-signin-heading"></h2>
        <button class="btn btn-lg btn-primary btn-block" id="button#1">Logout</button>
        <script type="text/javascript">
            document.getElementById("button#1").onclick = function () {
				location.href = "logout.php";
            };
        </script>
      </form>
    </div>
</body>
</html>
