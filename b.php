<?php
// Sample code to insert a user (run this once)
$username = 'username';
$password = 'password'; // Plain text password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$conn = new mysqli('localhost', 'root', ' ', 'hotel_db');
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();
$stmt->close();
$conn->close();
?>