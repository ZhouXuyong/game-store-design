<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "bi80mw@student.sunderland.ac.uk";  
  $subject = "New Contact Message";
  $body = "From: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email";


  echo "<h2>Message Sent!</h2>";
  echo "<pre>$body</pre>";
  echo "<p><a href=' '>Back to Home</a ></p >";
} else {
  echo "Invalid access.";
}
?>