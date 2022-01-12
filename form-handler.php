<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from='info@gmail.com'

$email_subject= 'new From Submission';

$email_body= "User name: $name.\n"
                "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";

$to='taneeshasrivastava@gmail.com';
$headers="From:" $email_from \r\n;

$headers .="Reply-to:" $visitor_email \r\n;

mail($to,$email_subject,$email_body,$header);

header("location: contact:html");
?>