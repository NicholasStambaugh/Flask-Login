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

// Count the number of login attempts for this username
$attempts_query = "SELECT COUNT(*) AS attempts FROM login_attempts WHERE username = '$username'";
$attempts_result = mysqli_query($conn, $attempts_query);
$attempts_row = mysqli_fetch_assoc($attempts_result);
$attempts = $attempts_row['attempts'];

// If there have been 3 failed login attempts for this username, lock the account
if ($attempts >= 3) {
  $lock_query = "UPDATE users SET locked = 1 WHERE username = '$username'";
  mysqli_query($conn, $lock_query);
}
?>
