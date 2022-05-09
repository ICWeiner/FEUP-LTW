<?php declare(strict_types = 1); ?>

<?php function drawHeader() { ?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="style.css">
			<title>Brand Spanking NEW Unter Eats</title>
		</head>
		<body>
			 <header>

				<h1>NEW Unter Eats</h1>
				<a href="cart.php">Cart
				<img src="./TestImages/cartIcon.png" alt="cart icon"></a>
				<p>Nome de utilizador</p>
			
			</header>
<?php } ?>

<?php function drawFooter() { ?>
		<footer>
			<p>Copyright &copy; LTW Project, 2022</p>
		</footer>
		</body>
	</html>
<?php } ?>

<?php function drawProfile(array $user) { ?><!-- this really should NOT be an array but oh well -->
			<main>
				<div class="profile_navbar">
					<nav>
					<ul>
						<li><a href= "">My addresses</a></li>
						<li><a href= "">My payment methods</a></li>
						<li><a href= "">Favorites</a></li>
					</ul>
					</nav>
				</div>
				
				<h1>Hello user :) </h1>
				<img src="./testImages/StockUser.jpg" alt="user profile pic" width="200" height="200">
				
				<?php foreach ($users as $user) ?>
				<div>
					<h2>Informação de contacto</h2>
					<p><?=$user['name']?><p>
					<p><?=$user['phone']?></p>
					<p><?=$user['email']?></p>
					<a href="action_edit_contact_info.php" class="button">editar</a>
				</div><!--added divs to make it clear that i mean for these to be seperate -->
				<div>
					<h2>Default address</h2>
					<p><?=$user['address']?></p>
					<p><?=$user['postcode']?></p>
					<p><?=$user['country']?></p>
					<a href="action_edit_contact_info.php" class="button">editar</a>
				</div>
			</main>

<?php } ?>