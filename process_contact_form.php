<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate the form data
  if (empty($name) || empty($email) || empty($message)) {
    header("Location: index.html?status=error");
    exit;
  }

  // Send the email
  $to = "wassim.trabelsi.perso@outlook.com";
  $subject = "$name wrote from your website";
  $body = "Name: $name\nEmail: $email\n\n$message";

  if (mail($to, $subject, $body)) {
    header("Location: index.html?status=success");
    exit;
  } else {
    header("Location: index.html?status=error");
    exit;
  }
}
?>