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