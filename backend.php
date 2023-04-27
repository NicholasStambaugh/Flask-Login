<?php
// sample php backend connection for practice
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// TODO: Add database connection code here

// Check if the username and password are valid
if ($username === 'admin' && $password === 'password') {
  $_SESSION['username'] = $username;
  header('Location: dashboard.php');
} else {
  $error = 'Invalid username or password';
  header('Location: index.php?error=' . urlencode($error));
}
?>
