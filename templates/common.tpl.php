<?php declare(strict_types = 1); ?>

<?php function drawHeader(string $name) { ?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="css/style.css" rel="stylesheet">
			<link href="css/layout.css" rel="stylesheet">
			<script src="../script.js" defer></script>
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

<?php function drawCart(array $order,$restaurant) { ?>
	<main id="cart">
        <h1>Checkout</h1>
        <h2>Restaurant: <?=$restaurant->name?></h2>
        
        <section class="shipping">
        <h4>Shipping information</h4>
        <div>
            <label>Address:
                    <input type="text" name="name" value="<?=$restaurant->address?>" required disabled>
            </label>
                    <button>Edit address</button>
            
        </div>
            <p>Method of payment: Personal Card </p>
        </section>
        
        <section class="orders">
        <h2>Your order</h2>
		<?php if( !empty($order)){
			foreach ($order as $dish){ ?>
			<div class="dishBox_<?=$dish['DishId']?>">
				<!--Esses ids são por enquanto-->
				<p><?=$dish['Name']?></p>
				<!--<label>Quantity: </label>-->
				
				<div>
					<button onclick="decrease(<?='qtyBox_'.$dish['DishId']?>)" >-</button>
					<input type="number" value="1" name="quantity" placeholder="quantity" id=<?="qtyBox_".$dish['DishId']?>>
					<button onclick="increase(<?='qtyBox_'.$dish['DishId']?>)" >+</button>
				</div>

				<p><?=$dish['Price']?></p>
				
			</div>
		<?php } } ?>

        <hr>
		<!--O total nao esta a ser alterado quando se aumenta as quantidades, talvez com javascrip?-->
        <p>Total price: <strong>56€</strong></p>
        </section>
    </main>

<?php } ?> 