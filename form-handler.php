<?php
$name = $_POST[ ' name ' ];
$visitor_email = $_POST[ ' email ' ];
$subject = $_POST[ ' subject ' ];
$message = $_POST[ ' message ' ];

$emil_from = 'info@uniofwales.com';
$email_subject = 'New Form Submission';
$emai_body = "User Name: $name. \n".
                           "User Emil: $visitor_email. \n".
                           "Subject: $subject. \n".
                           "User Message: $message  .\n";

$to = ' bijayathissa69@gmail.com';
$headers = "From: $emil_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject ,$emai_body,$headers);

header("Location: contact.html");


?>