<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Brand Spanking NEW Unter Eats</title>
	</head>
	<body>
		<header>
			<nav><!--TO-DO move into a php function-->
				<ul>
					<!--side opening menu? -->
					<li><a href="mainPage.php"><img src="./testImages/ourAMAZINGlogo.png" alt="Unter eats logo"> </a></li>
					<li><input type="text" placeholder="Search.." name="search"> <button type="submit"><i></i></button></li>
					<!--some other things? -->
				</ul>
			</nav>
			
		</header>
		<main>
			<nav>
				<ul><!-- do we want this?-->
					<li>A minha conta</li>
					<li><a href= "">A minha informação de contacto</a></li>
					<li><a href= "">O meu historico de pedidos</a></li>
					<li><a href= "">Os meus favoritos</a></li>
					<li><a href= "">As minhas moradas</a></li>
					<li><a href= "">Suporte</a></li>
				</ul><!-- do we want this?-->
			</nav>
			<img src="./testImages/StockUser.jpg" alt="user profile pic" width="200" height="200">
			<h1>Ola utilizador </h1>
			<div>
				<h2>Informação de contacto</h2>
				<p>Stock user name </p>
				<p>123456789(phone)</p>
				<p>stockuser@stockmail.com</p>
				<a href="action_edit_contact_info.php">editar</a>
			</div><!--added divs to make it clear that i mean for these to be seperate -->
			<div>
				<h2>Moradas</h2>
				<p>Stock street 1st floor right</p>
				<p>Post code here</p>
				<p>Country</p>
				<p>stockuser@stockmail.com</p>
				<a href="action_edit_contact_info.php">editar</a>
			</div>
		</main>
	</body>
</html>
