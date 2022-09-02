
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    
    <link rel="stylesheet" href="style.css">
<body>
    
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action = "register_db.php">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password1">Password</label>
            <input type="password" name="password1">
        </div>
        <div class="input-group">
            <label for="password2">Confirm Your Password</label>
            <input type="password" name="password2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Finish</button>
        </div>
        <p>Already has The Account <a href="login.php">Sign In</a></p>
    </form>

</body>
</html>