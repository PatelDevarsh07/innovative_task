<?php
  // Start the session
  session_start();

  // Check if the user is already logged in
  if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "Welcome back, $username!";
  } else {
    // Check if the login form has been submitted
    if (isset($_POST["username"])) {
      $username = $_POST["username"];

      // Set the session variable
      $_SESSION["username"] = $username;

      // Set a cookie to remember the username for 1 hour
      setcookie("username", $username, time() + 3600);

      echo "Welcome, $username!";
    } else {
      echo "Please log in.";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Session & Cookies Example</title>
</head>
<body>
  <?php if (!isset($_SESSION["username"])) { ?>
    <form method="POST">
      Enter your username:
      <input type="text" name="username">
      <button type="submit">Log In</button>
    </form>
  <?php } ?>
</body>
</html>
