<?php

$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['message'];


$formcontent="form: $name \n message: $message";
$mailTo = "abhishek.suvaidyam@gmail.com";
$subject = "contact form";
$mailheader = "Form: $email \r\n";
mail($mailTo, $subject, $formcontent, $mailheader) or die("error");
echo "thank you"
?>