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
