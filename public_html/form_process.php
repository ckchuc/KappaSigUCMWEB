<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "cgutierrezhuerta@ucmerced.edu";
$subject = $_POST['subject'];
$headers = "From: " . $email;
$body = "From: " . $fname . " " . $lname . " (" . $email . ")". "\r\n" . "Message: " . $message;

mail ($to, $subject, $body, $headers);
echo "Your message has been sent. Redirecting you back in 5 seconds.";
header("refresh:5;url=http://ajsdfjaiodsjofas4.net16.net/contact.html");
die();


?>