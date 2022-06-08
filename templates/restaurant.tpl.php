<?php function drawRestaurantsByCategory(array $restaurants,$category) { ?>
		<!-- TODO get restaurant name and put it below this line-->
		<h2><?=$category?></h2>
		<section class="category">
			<!-- TODO get category name and put it below this line-->
			<!-- TODO Talvez mudar o nome dessa classe para restaurants em vez de dishes-->
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
					<div >
						<section class="aspect-ratio-box">
							<img src="TestImages/bread.jpg" alt="foto do prato">
						</section>
						<p><?=$dish['name']?></p>
						<p><?=$dish['price']?>&euro;</p>
						<a href="action_add_to_cart.php?id=<?=$dish['id']?>$dishes" class="button">Add to cart</a>
					</div>
				<?php } } ?>
			</section>
		</section>
	</main>

<?php } ?>



<?php function drawReviewSection(array $reviews) { ?>
	   <section class="review">
		<?php foreach($reviews as $review) {?>
			<p><?= $review['text'] ?></p>
			<p><?= $review['score'] ?></p>

			<h2>Add your review</h2>
			<form action="action_add_review.php" method="post" class="addReview">
				Comment: <textarea name="comment" rows="5" cols="40" required></textarea>
				<h3>Give your rating:</h3>
				<div class="stars">
					<!--"fas fa-star" são preenchidas-->
					<!--"far fa-star" são não preenchidas-->
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
					<i class="far fa-star"></i>
				</div>
				Stars given: <input type="number" name="score" disabled> 
				<button type="submit">Submit review</button>
			</form>
		<?php }?>

		</section>
<?php } ?>
