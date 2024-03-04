<?php include('php/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  <link rel="stylesheet" type="text/css" href="styling/style.css">
</head>
<body>
<?php include('php/errors.php'); ?>
  <div class="container">
        <div class="box form-box">
 <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" value="<?php echo $username; ?>" required>
                </div>
                <div class="field input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" value="<?php echo $email; ?>" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password_1">Password</label>
                    <input type="password" name="password_1" id="password_1" autocomplete="off" required>
                </div>
				<div class="field input">
                    <label for="password_2">Confirm Password</label>
                    <input type="password" name="password_2" id="password_2" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="reg_user" value="REGISTER" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
</body>
</html>