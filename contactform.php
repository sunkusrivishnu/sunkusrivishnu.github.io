<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$email_from = 'noreply@mywebsite.com';

$email_subject = "New Form Submission from portfolio.";

$email_body = "User name:$name.\n".
                "User email = $email.\n".
                    "User message: $message.\n";

$to = "sunkusrivishnu@gmail.com";

$headers = "From: $email_from \r\n";

$headers.= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location:https://sunkusrivishnu.github.io");
?>
