<?php

require "framework/core/Framework.php";

Framework::run();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anna's Store</title>
    <link href="assets/styles/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header class="container group">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Clothes</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Create Account</a></li>
                <li><a href="login.php">Sign In</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero container">
        <h2>Anna's Clothing Website</h2>
        <p>Check out our new selection!</p>
    </section>
    <section class="grid">
        <section class="col-1-3">
            <img src="https://images-na.ssl-images-amazon.com/images/I/61Vkb1eT8LL._AC_UX385_.jpg" alt="">
                <h3>Shop Shirts</h3>
            </a>
            <p>Description</p>
        </section><!--
      --><section class="col-1-3">
            <img src="https://media.everlane.com/image/upload/c_fill,dpr_1.0,f_auto,g_face:center,q_auto,w_auto:100:1200/v1/i/8b485e6b_f62a.jpg" alt="">
            <h3>Shop Pants</h3>
            </a>
            <p>Description</p>
        </section><!--
      --><section class="col-1-3">
            <img src="https://cdn.shopify.com/s/files/1/0518/1725/1009/products/Main-4_773053e2-6196-4be9-864b-b42f7da4f99f_1800x1800.jpg?v=1614686753" alt="">
            <h3>Shop Shoes</h3>
            </a>
            <p>Description</p>
        </section>
    </section>
    <footer class="primary-footer container group">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Clothes</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Create Account</a></li>
                <li><a href="login.php">Sign In</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
