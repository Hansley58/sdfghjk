<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'youremail@example.com';
    $subject = 'New Message from Contact Form';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    mail($to, $subject, $body, $headers);
  }
?>

