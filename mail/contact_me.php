<?php
require("sendgrid-php/sendgrid-php.php");

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo "No arguments Provided!";
	return false;
}


$api_user = "";
$api_key = "";

$sendgrid = new SendGrid($api_user, $api_key);
$email    = new SendGrid\Email();

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'llvc1986@outlook.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "LLVC contact message!!!";
$email_body = "You have received a new message from your website.<br />"."Here are the details:<br /><strong>Name</strong>: $name<br /><strong>Email</strong>: $email_address<br /><strong>Phone</strong>: $phone<br /><strong>Message</strong>:<br />$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";

$email->addTo($to)
      ->setFrom($email_address)
      ->setSubject($email_subject)
      ->setHtml($email_body);

$sendgrid->send($email);

return true;
?>