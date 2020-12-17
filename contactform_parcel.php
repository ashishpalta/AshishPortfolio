<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    $email_form = 'mangerparking@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                     "User Message:$message.\n";
                    
    $to = "ashishpalta.sano@gmail.com";
    $headers = "From: $email_body\r\n";
    $headers ="Reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html")

?>