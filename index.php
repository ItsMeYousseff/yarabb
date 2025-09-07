<?php
require_once __DIR__ . '/includes/config_session.inc.php';
require_once __DIR__ . '/includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css?v=1">
  <title>Document</title>
</head>
<body>
  <h3>Login</h3>
  <form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit">Login</button>
  </form>

  <h3>Signup</h3>
  <form action="includes/signup.inc.php" method="post">
    <input type="text"   name="username" placeholder="Username" required>
    <input type="password" name="pwd"    placeholder="Password" required>
    <input type="email"  name="email"    placeholder="E-Mail"   required>
    <button type="submit">Signup</button>
  </form>

  <?php check_signup_errors(); ?>
</body>
</html>