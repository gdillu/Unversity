<?php
$name=$_POST['name']
$visitor_email=$_POST['email']
$subject=$_POST['subject']
$message=$_POST['message']

$email_from = 'info@dileepperson.atwebpages.com'

$email_subject = 'New Form Submission'

$email_body = "UserName :$name .\n";
            "UserEmail : $visitor_email .\n";
            "Subject : $subject.\n";
            "Message : $message.\n";

$to ='gdreddy255@gmail.com';
$headers ="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location : contact.html");

?>