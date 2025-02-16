<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'leutrimhajdini63@gmail.com';
    $subject = 'Form Submission: '.$subject;
    $message = 'Name: '.$name."\n".'Email: '.$email."\n".'Message: '.$message;
    $headers = 'From: '.$email;

    if (mail($to, $subject, $message, $headers)) {
      echo 'Your message has been sent.';
    } else {
      echo 'There was an error sending your message. Please try again later.';
    }
  }
?>
