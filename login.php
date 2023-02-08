<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Add code to validate the username and password
  // ...

  // Redirect to a different page if the validation is successful
  header("Location: http://www.example.com/welcome.php");
  exit;
}
?>

<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
