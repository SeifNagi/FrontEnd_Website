<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="success_css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Success Screen</title>
</head>
<body class="main">
	<div class="container_box">
		<div class="row">
			<img src="photos/success_image.png" class="row_image col-sm-6">
			<div class="col-sm-6">
				<h2 class="text-capitalize">successfully logged In</h2>
				<p>
					<?php
						include 'signup_val.php';
						/*if(isset($_COOKIE[$cookie_name])){
								echo "email is: ".$_COOKIE[$cookie_value];
						}
						else{
							echo  "email not save";
						}*/
					?>

				</p>
			</div>
		
		</div>
	</div>
</body>
</html>