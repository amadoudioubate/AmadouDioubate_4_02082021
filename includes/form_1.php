<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['input_504']) && strlen($_POST['input_504']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$input_504 = $_POST['input_504'];
	$message = $_POST['message'];
	
	$to = 'dioubateamadou11@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Votre projet d'accompagnement";
	$email_body = "Vous avez réçu un nouveau message. \n\n".
				  "Name: $name \nEmail: $email \nInput_504: $input_504 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: dioubateamadou11@gmail.com\n";
	$headers .= "Reply-To: $input_504";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>