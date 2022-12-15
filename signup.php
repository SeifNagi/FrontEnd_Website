<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="signup_css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="form_validation.js"></script>
	<title>Signup Screen</title>
</head>
<body class="main">
	<div class="container_box">
		<div class="row">
			<img src="photos/signup_screen_image.png" class="welcome_image col-sm-6">
			<div class="col-sm-6">
				<h2>Create account</h2>
				<p>Go ahead and sign up, let everyone know how awesome you are!</p>
				<form name="signUpFrom" method='post' action='signup_status.php' onsubmit="return validate()">
					<input type="text" name="username" id="user" placeholder=" &#xf2c0; | Username " class="fontAwesome" >
					<p id="username_error" class='error'></p>
					<input type="email" name="email" id="em" placeholder=" &#xf0e0; | Email" class="fontAwesome" >
					<p id="email_error" class='error'></p>
					<input type="password" name="password" id="pa" placeholder=" &#xf023;  | Password" class="fontAwesome" >
					<p id="password_error" class='error'></p>
					<input type="password" name="repassword" id="repa" placeholder=" &#xf023;  | Confirm Password" class="fontAwesome" >
					<p id="repassword_error" class='error'></p>
					<a href="signup_status.php"><button class='button_style'>Create account</button>

				</form>				
			</div>
		</div>
	</div>
</body>
</html>