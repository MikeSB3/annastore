<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
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
        <form action="#" method="post">
            <p>Account Creation Form</p>
            <fieldset>
                <label>
                    Name
                    <input type="text" name="name" value="<?php echo (isset($_POST["name"]) ? $_POST["name"] : "") ?>" required>
                </label>
                <label>
                    E-mail
                    <input type="email" name="email" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : "") ?>" required>
                </label>
                <label>
                    Username
                    <input type="text" name="username" value="<?php echo (isset($_POST["username"]) ? $_POST["username"] : "") ?>" required>
                </label>
                <label>
                    Password
                    <input type="password" name="password" required>
                </label>
                <label>
                    Password
                    <input type="password" name="repeat_password" required>
                </label>
                <span><?php echo ((isset($error) && $error != "") ? $error : ""); ?></span>
                <span><?php echo ((isset($success) && $success != "") ? $success : ""); ?></span>
            </fieldset>
            <fieldset>
                <input type="submit" value="Sign Up"/>
                <a href="index.php">
                    <input type="button" name="return" value="Return to Login Page">
                </a>
            </fieldset>
        </form>
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