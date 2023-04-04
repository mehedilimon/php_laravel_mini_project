<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Establish a connection to the MySQL database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "blog_db";
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert the form data into the table
  $sql = "INSERT INTO contact_messages (name, email, subject, message)
    VALUES ('$name', '$email', '$subject', '$message')";
  if ($conn->query($sql) === false) {
    echo "Error inserting data: " . $conn->error;
    exit;
  }

  // Close the database connection
  $conn->close();

  // Display a success message
  echo "Thank you for your message, " . $name . "! We will get back to you soon.";
}

?>
