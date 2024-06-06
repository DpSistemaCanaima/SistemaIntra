<?php

// Include the database connection configuration file
require "config/cone.php";

// Get user credentials from POST request (ensure proper form validation)
$CEDULA = $_POST['cedula'];
$password = $_POST['pass'];

// **Security Improvement: Use password_hash() for Secure Hashing**
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Construct the UPDATE query using prepared statements to prevent SQL injection
$query = "UPDATE user_datos SET PASSWORD = ? WHERE CEDULA = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("si", $hashedPassword, $CEDULA);

// Execute the prepared statement
$stmt->execute();

// Check for successful update (consider error handling)
if ($stmt->affected_rows === 1) {
  echo "Password updated successfully!";
} else {
  echo "Failed to update password. Please try again.";
}

// Close the prepared statement
$stmt->close();

// **Consider closing the database connection (if applicable)**
// $conn->close();

?>
