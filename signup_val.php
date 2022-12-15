<?php
	$curl = curl_init();
	$username=$_POST["username"];
	$email=$_POST["email"];
	$cookie_name="user_email";
	$password=$_POST["password"];
	$repassword=$_POST["repassword"];
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://goldblv.com/api/hiring/tasks/register?username=$username&email=$email&password=$password&password_confirmation=$repassword",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_HTTPHEADER => array(
	    'Accept: application/json',
	    'Content-Type: application/json'
	  ),
	));
	$response = curl_exec($curl);
	if(!$response){
		echo curl_error(response);
	};
	if(!empty($email))
	{
		$cookie_value=$_POST['email'];
		setcookie ($cookie_name,$cookie_value,time() + 30);
	}
	echo $email;
	curl_close($curl);
?>