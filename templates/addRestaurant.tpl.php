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
						<input type="number" name="price" placeholder="Price" step="0.01" min="0" required>
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
					<form action="addDishPage.php" method="post" enctype="multipart/form-data">
						<select type="text" name="restaurantId" placeholder="name" required>
							<?php if( !empty($restaurants)){
								foreach ($restaurants as $restaurant){ ?>
									<option value="<?=$restaurant['id']?>">
										<?=$restaurant['name']?>
									</option>
							<?php } } ?>
						</select>
						<input type="submit" value="Upload">
					</form>
				</div>
			</main>
		</body>
	</html>
<?php } ?>