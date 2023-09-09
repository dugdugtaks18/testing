<?php
	$name = $_POST['fullname'];
	$visitor_email = $_POST['email-input'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'aldwinfamilara@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
					"User Subject: $subject.\n".
					"User Message: $message.\n";
	$to = "familara.marcaldwin.c200367@gmail.com";
	$headers = "From: $email_from \r\n"
	$header .= "Reply-To:$visitor_email \r\n"
	mail(to, subject, message);
	header("Location: index.html");
?>