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
						<button class="">Add to cart</button>
					</div>
				<?php } } ?>
			</section>
		</section>
	</main>

	<script>

		dishesParent = document.querySelectorAll('.dishes button')

		for (const addToCart of dishesParent){
			addToCart.addEventListener('click', function(){
				const dishesClass = this.parentElement
				console.log(dishesClass)
				console.log("olá anete")

				name = dishesClass.querySelector('p').textContent
				price = dishesClass.querySelector('.dishes ').value

				console.log(name)
				console.log(price)

			})
		}

		function addItemToCart(name, price, quantity){
			const section = document.querySelector()
		}

	</script>

<?php } ?>
