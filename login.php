<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include "sprite.php" ?>
	<!-- LOGIN-PAGE -->
	<div class="login-page">
		<div class="bg-top">
			<img src="img/login-img-top.png" alt="">
		</div>
			<a href="#" class="logo">
				<svg>
				  	<use xlink:href="#logo"></use>
				</svg>
			</a>
			<form action="#" class="form-login form-style">
				<h5 class="line">Login</h5>

				<label class="name">
					<span>Login</span>
					<input type="email" name="name" placeholder="example@mail.com">
				</label>
				<label class="name">
					<span>Password</span>
					<input type="password" name="name" placeholder="">
				</label>

				<label class="check">
					<input type="checkbox" name="name">
					<span>Remember me on this computer</span>
				</label>

				<div class="d-flex">
					<button type="submit" class="btn">Sing in</button>	
					<a href="#">forgot password</a>
				</div>
			</form>	
		
		<div class="bg-bottom">
			<img src="img/login-img-bottom.png" alt="">
		</div>
	</div>
	<!-- // LOGIN-PAHE -->
</body>
</html>