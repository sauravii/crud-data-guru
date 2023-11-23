<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">

        <header>Register</header>
        <form action="../controllers/register.php" method="post">
          <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off" required />
          </div>

          <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required />
          </div>

          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required />
          </div>

          <div class="field input">
            <label for="confirmPass">Confirm Password</label>
            <input type="password" name="confirmPass" id="confirmPass" autocomplete="off" required />
          </div>

          <div class="field">
            <input type="submit" class="btn" name="submit" value="Register" required />
          </div>

          <div class="links">Already have an account? <a href="index.php">Login</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
