<?php
// The message
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


	if(empty($name) || empty($email) || empty($message)){
		return new HttpStatusCodeResult(500, "Error message");
		
	}

// In case any of our lines are larger than 1000 characters, we should use wordwrap()
$message = wordwrap("From: ". $name. "\nEmail Address: ". $email. "\nMessage:\n" . $message, 4000, "\r\n");

// Send
mail('gbemigaadeosun@gmail.com', 'Contact Me - Form', $message);
echo $name;
echo $email;
echo $message;
?>