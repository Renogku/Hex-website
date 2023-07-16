<?php 
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$contact= $_POST['phone'];
$message= $_POST['message'];

$email_from = 'drishtiipad@gmail.com';

$email_subject = "New Form submission";

$email_body = "You have received a new message from the user $name.\n"."Here is the message:\n $message".

$to = "yourname@yourwebsite.com";

mail($to,$email_subject,$email_body);

?>