<?php include('php/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login system</title>
  <link rel="stylesheet" type="text/css" href="styling/style.css">
</head>
<body>
<?php include('php/errors.php'); ?>
  <div class="container">
        <div class="box form-box">
  <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="login_user" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
</div>
</body>
</html>