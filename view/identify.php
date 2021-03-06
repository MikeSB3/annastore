<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/styles/main.css" rel="stylesheet">
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Clothes</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Create Account</a></li>
        <li><a href="login.php">Sign In</a></li>
    </ul>
</nav>
    <div>
        <form method="post">
            <p>Password Reset Form</p>
            <fieldset>
                <label>
                    Please enter your e-mail address.<br>A link to reset your password will be sent to you.
                    <input type="email" name="email" required>
                </label>
                <span><?php echo ((isset($error) && $error != "") ? $error : ""); ?></span>
                <span><?php echo ((isset($success) && $success != "") ? $success : ""); ?></span>
            </fieldset>
            <fieldset>
                <input type="submit" name="submit" value="Send Reset Link">
                <a href="index.php">
                    <input type="button" name="return" value="Return to Login Page">
                </a>
            </fieldset>
        </form>
    </div>
</body>
</html>
