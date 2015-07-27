<?php
	// VALUES FROM THE FORM
	
	$email		= $_POST['email'];
	

	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: $email";
	$recipient	= "agustin.peirano@olx.com";
	$subject	= "Suscripción para Beta App";
	$message	= "Email: $email";

	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $message, $headers);

	// REDIRECT TO THE THANKS PAGE
	header("location: ok.html#invite");
?>
