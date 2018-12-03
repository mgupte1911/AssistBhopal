<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='assistbhopal@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Assist Bhopal New Message';
		$message="Name :".$name."\n"."Wrote the following message:"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			 echo '';
		}
		else{
			echo "Something went wrong!";
		}
	}
?>