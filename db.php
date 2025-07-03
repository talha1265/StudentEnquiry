<?php
$host = "localhost";
$user = "root";
$pass = ""; // set your password if any
$db = "student_enquiries";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
