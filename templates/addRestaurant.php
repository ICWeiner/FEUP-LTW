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

<?php function drawDishRegister() { ?>
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
							<option value="Dieet">Diet</option>
							<option value="Dessert">Dessert</option>
						</select>
						<input type="file" name="dishImage" required><!--TODO: Style this :^) -->
						<input type="submit" value="Upload"><!--TODO: AND this :^) -->
					</form>
				</div>
			</main>
		</body>
	</html>
<?php } ?>