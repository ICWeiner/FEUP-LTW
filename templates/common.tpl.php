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
					<p><?=$name?></p>
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

<?php function drawProfile(Customer $user) { ?>
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
				
				<h1>Hello <?=$user->name?> :) </h1>
				<img src="./TestImages/StockUser.jpg" alt="user profile pic" width="200" height="200">
				<div>
					<h2>Informação de contacto</h2>
					<p><?=$user->name?><p>
					<p><?=$user->phone?></p>
					<p><?=$user->email?></p>
					<a href="action_edit_contact_info.php" class="button">editar</a>
				</div><!--added divs to make it clear that i mean for these to be seperate -->
				<div>
					<h2>Default address</h2>
					<p><?=$user->address?></p>
					<a href="action_edit_contact_info.php" class="button">editar</a>
				</div>
			</main>

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


<!--Depois termino, acho que não pode ficar assim -->
<?php function drawRestaurantHeader(array $restaurant) { ?>
	<h1><?=$restaurant['name']?></h1>
<?php } ?>


<?php function drawRestaurantsByCategory(array $restaurants,$category) { ?><!-- passar tudo por um unico array?-->
		<!-- TODO get restaurant name and put it below this line-->
		<h2><?=$category?></h2>
		<section class="category">
			<!-- TODO get category name and put it below this line-->
			
			<section class="dishes">
				<?php if( !empty($restaurants)){
					foreach ($restaurants as $restaurant){ ?>
					
					<div> 
						<section class="aspect-ratio-box">
							<img src="TestImages/bread.jpg" alt="foto do prato">
						</section>
						<a href="restaurantPage.php?id=<?=$restaurant['id']?>"><p><?=$restaurant['name']?></p></a>
					</div>
				<?php } } ?>
			</section>
		</section>
<?php } ?>






<?php function drawDishesByCategory(array $dishes, $category,$restaurantname) { ?>
	<main>
		<!--<h2><?=$restaurantname?></h2>-->
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

