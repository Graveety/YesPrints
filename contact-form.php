<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];


$email_from = 'edionwetovia@gmail.com';

$email_subject = "New Form submission";

$email_body = "User Name: $name.\n". 
               "User Email: $visitor_email.\n".
               "User Message: $message.\n";

$to = "y3ssconcepts@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>