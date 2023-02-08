<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: welcome.php");
  exit;
}
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Welcome Page</title>
</head>
<body>
  <h1>Welcome to the protected area!</h1>
  <p>You have successfully logged in.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
