<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">

        <header>Login</header>
        <form action="../controllers/auth.php" method="post">
          <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required "/>
          </div>

          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required />
          </div>

          <div class="field">
            <input type="submit" class="btn" name="submit" value="Login" required />
          </div>

          <div class="links">Don't have an account? <a href="register.php">Register</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
