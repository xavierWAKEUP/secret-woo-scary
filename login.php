<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "Xavier" && $password === "Xavier232") {
    header("Location: https://xavierwakeup.github.io/secret-woo-scary/welcome.php");
    exit;
  } else {
    echo "Incorrect username or password. Please try again.";
  }
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
