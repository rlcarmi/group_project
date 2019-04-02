<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "rlc35@sussex.ac.uk";
$subject = "Snack-Snap Email";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you! Your email has been sent & we will get back to you as soon as we can!";
?>
