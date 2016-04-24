<?php
// Check for empty fields
if(empty($_POST['name'])        ||
   empty($_POST['email'])       ||
   empty($_POST['subject'])     ||
   empty($_POST['message'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }
    
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
    
$to = 'sschadwick@gmail.com';
$email_subject = "Website Contact:  $subject";
$email_body = "$name\n$email_address\n\n$subject\n\n$message";
$headers = "From: $email_address\n";
$headers .= "Reply-To: $email_address"; 
if(mail($to,$email_subject,$email_body,$headers)) {
    return true;
}
return false;            
?>
