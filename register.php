<?php
include "config.php";
include 'process_r.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css" type="text/css">

    <title>Register Form </title>
</head>

<body>
    <div class="container">
	<div class="con_r">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" >
            </div>
			 <div class="input-group">
                <input type="text" placeholder="Name" name="name" >
            </div>
			 <div class="input-group">
                <input type="text" placeholder="Lastname" name="lastname" >
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" >
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" >
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
        </form>
	</div>
    </div>
</body>

</html>
