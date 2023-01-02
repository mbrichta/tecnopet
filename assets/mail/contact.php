<?php

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$phone = $_POST['phone'];
	$comments = $_POST['comments'];

	$mailTo = 'mathias.brichta@hotmail.com';
	$headers = "From: ".$mailFrom;
	
	$e_subject = 'Contact Form';
	$e_body = "You have been contacted by $name, their additional message is as follows." . PHP_EOL . PHP_EOL;
	$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
	$e_phone = "Phone: $name" . PHP_EOL . PHP_EOL;
	$e_reply = "You can contact $name via email, $email";

	$msg = wordwrap( $e_body . $e_content . $e_phone . $e_reply, 70 );

	mail($mailTo, $e_subject, $msg, $headers);
}