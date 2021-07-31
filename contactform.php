<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$to = "haweirh@gmail.com";

$headers = "From: ".name ."\r\n";
$txt="You have recived an e-mail from" .$name 
."\r\n Email:" .$email 
."\r\n Message:" .$message;

if($email!= NULL){
  mail($to, $subject, $text, $headers);
}

header('Location:index.html');


 ?>