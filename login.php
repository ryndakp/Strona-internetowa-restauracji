<html>
<head>
    <meta charset="UTF-8">
    <title>Restauracja P&J </title>
	<link rel="stylesheet" href="css/login.css" type="text/css">
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	 <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&display=swap" rel="stylesheet">
	 <script src="js/main.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
include "config.php";
include 'process_l.php';
?>
			<div class="container-big">
				<div class="login_container">
				   <div class="logo">
						<img src="img/logo_panel.png"> 
				   <div>
				   <div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
				</div>
			</div>
</body>
</html>