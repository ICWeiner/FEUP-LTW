<?php declare(strict_types = 1); ?>

<?php function drawHeader() { ?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="css/style.css" rel="stylesheet">
			<link href="css/layout.css" rel="stylesheet">
			<title>Brand Spanking NEW Unter Eats</title>
		</head>
		<body>
			 <header>

				<h1>NEW UNTER EATS</h1>
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

<?php function drawProfile(array $user) { ?>
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
				<img src="./TestImages/StockUser.jpg" alt="user profile pic" width="200" height="200">
				
				<?php foreach ($user as $user) ?>
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

<?php function drawRestaurant(array $appetizers, array $dishes) { ?><!-- passar tudo por um unico array?-->
	<main>
		<!-- TODO get restaurant name and put it below this line-->
		<h2>Restaurant: Someplace Special - Porto</h2>

		<section class="category">
			<!-- TODO get category name and put it below this line-->
			<h2>Appetizer</h2>
			<section class="dishes">
				<?php if( !empty($appetizers)){
					foreach ($appetizers as $appetizer){ ?>
					<div>
						<section class="aspect-ratio-box">
							<img src="TestImages/bread.jpg" alt="foto do prato">
						</section>
						<p><?=$appetizer['name']?></p>
						<p><?=$appetizer['price']?>&euro;</p>
					</div>
				<?php } } ?>
			</section>
		</section>

	   <section class="category">
	   		<!-- TODO get category name and put it below this line-->
			<h2>Dishes</h2>
			<section class="dishes">
				<?php if( !empty($dishes)){
					foreach ($dishes as $dish){ ?>
					<div>
						<section class="aspect-ratio-box">
							<img src="TestImages/bread.jpg" alt="foto do prato">
						</section>
						<p><?=$dish['name']?></p>
						<p><?=$dish['price']?>&euro;</p>
					</div>
				<?php } } ?>
			</section>
		</section>
	</main>
<?php } ?>

<?php function drawCart(array $orders) { ?>
	<main>

        <!--Assumindo que no cart só pode ter coisas de um restaurante--> 
        <!--Depois põe-se lado a lado com css talvez-->
        <h1>Checkout</h1>
        <h2>Restaurant: Someplace Special - Porto</h2>
        
        <section class="shipping">
        <h4>Shipping information</h4>
        <div>
            <label>Address:
                    <input type="text" name="name" value="Senhora da hora, Porto" required disabled>
            </label>
                    <button>Edit address</button>
            
        </div>
            <p>Method of payment: Personal Card </p>
        </section>
        
        
        <section class="orders">
        <h2>Your order</h2>
		<?php if( !empty($orders)){
			foreach ($orders as $order){ ?>
			<div>
				<p><?=$order['name']?></p>
				
				<label>Quantity: </label>
				<button>+</button><input type="number" value="1" name="quantity" placeholder="quantity"><button>-</button>

				<p><?=$order['price']?></p>
				
			</div>
		<?php } } ?>

        <hr>
		<!--O total nao esta a ser alterado quando se aumenta as quantidades, talvez com javascrip?-->
        <p>Total price: <strong>56€</strong></p>
        </section>
    </main>
<?php } ?> 




<?php function drawRestaurantsByCategory(array $restaurants,$category) { ?><!-- passar tudo por um unico array?-->
		<!-- TODO get restaurant name and put it below this line-->
		<h2><?=$category?></h2>
		<section class="category">
			<!-- TODO get category name and put it below this line-->
			<h2><?=$restaurant['name']?></h2>
			<section class="dishes">
				<?php if( !empty($restaurants)){
					foreach ($restaurants as $restaurant){ ?>
					<div>
						<section class="aspect-ratio-box">
							<img src="TestImages/bread.jpg" alt="foto do prato">
						</section>
						<p><?=$restaurant['name']?></p>
					</div>
				<?php } } ?>
			</section>
		</section>
<?php } ?>
