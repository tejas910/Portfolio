<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sub = $_POST['sub'];
	$msg = $_POST['msg'];
	$to = "tppatil392@gmail.com";
	$txt = "Name = ". $name ."\r\nEmail = ".$email . "\r\nSubject = ". $sub ."\r\nMessage =". $msg;
	$headers = "From: noreply@portfolio.com"."\r\n"."CC: somebodyelse@example.com";
	if($email!=NULL){
		mail($to, $sub, $txt,$headers);
	}

	header("Location:index.html");
 
?>