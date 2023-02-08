<?php
session_start();

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == "admin" && $password == "password") {
    $_SESSION['logged_in'] = true;
    header("Location: welcome.php");
    exit;
  } else {
    $error = "Incorrect username or password. Please try again.";
  }
}
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login Page</title>
</head>
<body>
  <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
