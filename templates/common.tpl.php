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
			<div class="dishBox">
				<!--Esses ids são por enquanto-->
				<p><?=$order['name']?></p>
				<!--<label>Quantity: </label>-->
				
				<div>
					<button onclick="decrease(<?='qtyBox_'.$order['name']?>)" >-</button>
					<input type="number" value="1" name="quantity" placeholder="quantity" id=<?="qtyBox_".$order['name']?>>
					<button onclick="increase(<?='qtyBox_'.$order['name']?>)" >+</button>
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