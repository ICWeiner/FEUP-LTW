<?php declare(strict_types = 1); ?>

<?php function drawRestaurantRegister() { ?>
			<main>
				<div id="">
					<h2>Register Restaurant</h2>
					<form action="action_addRestaurant.php" method="post" enctype="multipart/form-data" class="register" >
						<input type="text" name="restaurantName" placeholder="Restaurant name" required>
						<input type="text" name="category" placeholder="Category" required>
						<input type="text" name="address" placeholder="Address" required>
						<input type="file" name="restaurantImage" required><!--TODO: Style this :^) -->
						<input type="submit" value="Upload"><!--TODO: AND this :^) -->
					</form>
				</div>
			</main>
		</body>
	</html>
<?php } ?>

<?php function drawDishRegister($restaurantId) { ?>
			<main>
				<div id="">
					<h2>Register Dish</h2>
					<form action="action_addDish.php" method="post" enctype="multipart/form-data" class="register" >
						<input type="text" name="dishName" placeholder="Dish name" required>
						<input type="number" name="price" placeholder="Price" required>
						<select type="text" name="category" placeholder="category" required>
							<option value="Meat">Meat</option>
							<option value="Fish">Fish</option>
							<option value="Vegetarian">Vegetarian</option>
							<option value="Diet">Diet</option>
							<option value="Dessert">Dessert</option>
						</select>
						<input type="file" name="dishImage" required><!--TODO: Style this :^) -->
						<input type="submit" value="Upload"><!--TODO: AND this :^) -->
						<input type="number" name="restaurantId" value="<?= $restaurantId?>" hidden>
					</form>
				</div>
			</main>
		</body>
	</html>
<?php } ?>

<?php function drawRestaurantDropDown($restaurants) { ?>
			<main>
				<div id="draw">
					<h2>Pick restaurant's name</h2>
					<form action="" method="post" enctype="multipart/form-data">
						<select id="restaurantSelector" type="text" name="restaurantId" placeholder="name" required>
							<?php if( !empty($restaurants)){
								foreach ($restaurants as $restaurant){ ?>
									<option value="<?=$restaurant['id']?>">
										<?=$restaurant['name']?>
									</option>
							<?php } } ?>
						</select>
						<!--<input type="submit" value="Upload"> onchange='this.form.submit()'-->
						<button type="submit" hidden>Add Dish</button>
						<button type="submit" hidden>Edit Dish</button>
					</form>
				</div>
			</main>
		</body>
	</html>
<?php } ?>

<?php function drawRestaurantsEditPage(array $restaurants) { ?>
		<!-- TODO get restaurant name and put it below this line-->
		<h2>Your Restaurants</h2>
		<section class="category">
			<!-- TODO Talvez mudar o nome dessa classe para restaurants em vez de dishes-->
			<section class="dishes">
				<?php if( !empty($restaurants)){
					foreach ($restaurants as $restaurant){ ?>
					<div> 
						<section class="aspect-ratio-box">
								<img src="images/restaurants/originals/<?=$restaurant['id']?>.jpg" alt="foto do restaurante">
						</section>
						<p><?=$restaurant['name']?></p>
						
						<!--<a class="button" href="addDishPage.php?restaurantId=<?=$restaurant['id']?>">Add Dish</a>
						<a class="button" href="editDishPage.php?restaurantId=<?=$restaurant['id']?>">Edit Dish</a>-->

						<form action="addDishPage.php" method="post">
							<button type="submit">Edit Dish</button>
							<input type="number" name="restaurantId" value="<?=$id ?>" hidden>
						</form>
						<form action="editDishPage.php" method="post">
							<button type="submit">Add Dish</button>
							<input type="number" name="restaurantId" value="<?=$id ?>" hidden>
						</form>
					</div>
				<?php } } ?>
			</section>
		</section>
<?php } ?>