<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Connect to the database
  $db = mysqli_connect('localhost', 'db_user', 'db_password', 'db_name');

  // Check if the username and password are correct
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    // Set the session variable
    $_SESSION['username'] = $username;

    // Redirect to the welcome page
    header("Location: welcome.php");
  } else {
    // Show an error message
    echo "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login Page</title>
</head>
<body>
  <h1>Login</h1>
  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
