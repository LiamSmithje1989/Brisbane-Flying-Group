<?php
	$to = ' inquiry@brisflying.org';
	$subject = 'the subject';
	$message = 'From: ' . $_POST['email'] . "\r\n" . 'From: ' . $_POST['name'] . "\r\n\r\n" . $_POST['message'];
	$headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Name: ' . $_POST['name'];

    $name = $_POST['name'];
    $email = $_POST['email'];

	if($name != "" || $name != null || $email != "" || $email != null || $message != "" || $email != null) {
		mail($to, $subject, $message, $headers);
		header("Location: membership-enquiries.html");
	}


	/*$to      = '//';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	*/
	
?>
