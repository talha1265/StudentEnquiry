<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $conn->real_escape_string($_POST['name']);
  $class = $conn->real_escape_string($_POST['class']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO enquiries (name, class, phone, message) 
          VALUES ('$name', '$class', '$phone', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Enquiry submitted successfully!'); window.location.href='index.html';</script>";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
