<?php
if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$profession = $_POST['profession'];
$age = $_POST['age'];
$message= $_POST['message'];
$email_subject = "New Form Submission";


$mailTo = "sanchitachavan123@gmail.com";
$headers = "From: $email" \r\n";

$txt = "You have received an email .\n\n".Name: $name.\n". "Email: $email.\n". "Phone Number: $phone.\n". "Profession: $profession.\n". "Age: $age.\n". "Message: $message.\n";


mail($mailTo, $email_subject , $txt, $headers);
header("Location: index.php?mailsend");


}


