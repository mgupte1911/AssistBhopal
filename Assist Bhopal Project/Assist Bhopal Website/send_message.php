<?php
	if(isset($_POST['submit']))
  {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='monyagupte@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assist Bhopal Message';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		mail($to, $subject, $message, $headers);
   
	}
?>