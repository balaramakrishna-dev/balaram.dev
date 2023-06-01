<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Email recipient
  $to = 'kammabalaram83416@gmail.com';

  // Email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

  // Email content
  $emailContent = "Name: $name\n";
  $emailContent .= "Email: $email\n";
  $emailContent .= "Subject: $subject\n";
  $emailContent .= "Message: $message\n";

  // Send the email
  $mailSent = mail($to, $subject, $emailContent, $headers);

  // Check if email was sent successfully
  if ($mailSent) {
    echo 'Email sent successfully!';
  } else {
    echo 'Failed to send email. Please try again.';
  }
}
?>
