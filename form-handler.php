<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@easytutorialspro.com';
$email_subject = 'New Form Submission';
$email_body = "User Name : $name.\n".
               "User email : $visitor_email.\n".
               "Subject : $subject.\n".
               "User message : $message.\n";

$to = 'himukumar9995@outlook.com';
$headers = "From : $email_from \r\n";
$headers .= "Reply-To: $visitor_emai \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html")
?>