<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $conn->real_escape_string($_POST["customer_name"]);
  $email = $conn->real_escape_string($_POST["customer_email"]);
  $message = $conn->real_escape_string($_POST["message"]);
  $product_id = intval($_POST["product_id"]);

  
  $to = "bi80mw@student.sunderland.ac.uk"; 
  $subject = "New Game Order";
  $body = "Name: $name\nEmail: $email\nProduct ID: $product_id\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Order submitted successfully!";
  } else {
    echo "Failed to send order. Please try again.";
  }
} else {
  echo "Invalid request.";
}
?>