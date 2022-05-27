<?php declare(strict_types = 1); ?>

<?php function drawHeader(string $name) { ?>
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
				<form action="action_logout.php" method="post" class="logout">
					<a href="profile.php"><?=$name?></a>
					<button type="submit">Logout</button>
				</form>

			</header>
<?php } ?>

<?php function drawFooter() { ?>
		<footer>
			<p>Copyright &copy; LTW Project, 2022</p>
		</footer>
		</body>
	</html>
<?php } ?>

<?php function drawCart(array $orders) { ?>
	<main id="cart">

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
				
				<!--<label>Quantity: </label>-->
				<div id="quantity">
					<button id="minus">-</button>
					<input type="number" value="1" name="quantity" placeholder="quantity">
					<button id="plus">+</button>
				</div>

				<p><?=$order['price']?></p>
				
			</div>
		<?php } } ?>

        <hr>
		<!--O total nao esta a ser alterado quando se aumenta as quantidades, talvez com javascrip?-->
        <p>Total price: <strong>56€</strong></p>
        </section>
    </main>
<?php } ?> 




<?php function drawRestaurantsByCategory(array $restaurants,$category) { ?>
		<!-- TODO get restaurant name and put it below this line-->
		<h2><?=$category?></h2>
		<section class="category">
			<!-- TODO get category name and put it below this line-->
			
			<section class="dishes">
				<?php if( !empty($restaurants)){
					foreach ($restaurants as $restaurant){ ?>
					
					<div> 
						<section class="aspect-ratio-box">
							<a href="restaurantPage.php?id=<?=$restaurant['id']?>">
								<img src="TestImages/bread.jpg" alt="foto do prato">
							</a>
						</section>
						<p><?=$restaurant['name']?></p>
					</div>
				<?php } } ?>
			</section>
		</section>
<?php } ?>

<?php function drawDishesRestaurantName($restaurant) { ?>
	<h2><?=$restaurant?></h2>
<?php } ?>

<?php function drawDishesByCategory(array $dishes, $category) { ?>
	<main>
		<!-- TODO get restaurant name and put it below this line-->
	   <section class="category">
	   		<!-- TODO get category name and put it below this line-->
			<h3><?=$category?></h3>
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

