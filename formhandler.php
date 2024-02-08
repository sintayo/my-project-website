<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$emal_form = 'globalcolleg@gmail.com';


$emal_subject = 'new form submision';
$emal_body = "User Name: $name.\n ".
              "User Gmail: $visitor_email.\n ".
              "User Subject: $subject.\n ".
              "User Message: $message.\n ";


              $to = 'sintayehukume@gmail.com';

             $headers ="from: $emal_form \r\n"
             $headers. ="Reply to: $visitor_email \r\n";
             mail($to,$emal_subject,$emal_body,$headers);
             header("Location: Contact.html");
?>