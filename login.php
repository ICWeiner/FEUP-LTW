<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Brand Spanking NEW Unter Eats</title>
		<link href="forms.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1>NEW Unter Eats</h1>
            <!-- <a href="about.php">About</a> -->
			<div id="signup">
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			</div>
		</header>
		<img src="TestImages/mainImage.jpeg" alt="Homepage image of new unter eats" id="mainImage">
		<h2>Discover amazing restaurants</h2>
		<main>
			<h2>Login</h2>
			<form action="action_login.php" method="post" class="login">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<button type="submit">Login</button>
				<a href="register.php">Dont have an account yet? Register here</a>
			</form>
		</main>
	</body>
</html>
