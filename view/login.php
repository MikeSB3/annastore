<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link href="assets/styles/main.css" rel="stylesheet">
</head>
<body>
    <header class="container group">
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
    </header>
    <section class="container">
        <div>
            <form method="post" action="#">
                <p>Login Form</p>
                <fieldset>
                    <label>Username
                        <input type="text" name="username">
                    </label>
                    <label>
                        Password
                        <input type="password" name="password">
                    </label>
                </fieldset>
                <fieldset>
                    <a href="account.php">
                        <input type="submit" name="submit" value="Login">
                    </a>
                    <input type="button" name="clear" value="Clear">
                </fieldset>
                <ul>
                    <li>Forgot your password?</li>
                    <li><a href="identify.php">Reset your password</a></li>
                </ul>
            </form>
        </div>
        <div>
            <ul>
                <li>Are you a new user?</li>
                <li><a href="register.php">Create an account</a></li>
            </ul>
        </div>
    </section>
    <footer class="primary-footer container group">
        <small>Built by Michael Berryman</small>
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
    </footer>
</body>
</html>
