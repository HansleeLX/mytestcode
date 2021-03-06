<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<!-- <link rel="stylesheet" href="css/LoginPage_animate.css"> -->
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/LoginPage_style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Job <span>DESCRIPTOR</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password">
			<br/>
			<a href="DashBoard.php" role="button" type="button" class="button">Login</a>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
</body>

<script>
	// $(document).ready(function () {
 //    	$('#logo').addClass('animated fadeInDown');
 //    	$("input:text:visible:first").focus();
	// });
	// $('#username').focus(function() {
	// 	$('label[for="username"]').addClass('selected');
	// });
	// $('#username').blur(function() {
	// 	$('label[for="username"]').removeClass('selected');
	// });
	// $('#password').focus(function() {
	// 	$('label[for="password"]').addClass('selected');
	// });
	// $('#password').blur(function() {
	// 	$('label[for="password"]').removeClass('selected');
	// });
</script>

</html>