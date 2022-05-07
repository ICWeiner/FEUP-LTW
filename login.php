<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Brand Spanking NEW Unter Eats</title>
		<link href="forms.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1>NEW Unter Eats</h1>
            <!-- <a href="about.php">About</a> -->
			<div id="signup"><!-- TO-DO: mudar este div para nav? -->
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			</div>
		</header>
		<main>
			<img src="TestImages/mainImage.jpeg" alt="Homepage image of new unter eats" id="mainImage">
			<div id="">
				<h3>Discover amazing restaurants</h3>
				<h2>Login</h2>
				<form action="action_login.php" method="post" class="login">
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<button type="submit">Login</button>
					<a href="register.php">Dont have an account yet? Register here</a>
				</form>
			</div>
		</main>
	</body>
</html>
