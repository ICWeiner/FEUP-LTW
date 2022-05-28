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
					<a href="profile_edit.php" class="button">editar</a>
				</div><!--added divs to make it clear that i mean for these to be seperate -->
				<div>
					<h2>Default address</h2>
					<p><?=$user->address?></p>
					<a href="profile_edit.php" class="button">editar</a>
				</div>
			</main>
<?php } ?>

<?php function drawEditProfile(Customer $user) { ?>
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
				<form action="action_edit_profile.php" method="post">
					<h2>Informação de contacto</h2>
					

					<label for="first_name">Username:</label>
  					<input type="text" name="newName" value="<?=$user->name?>">

  					<label for="first_name">Phone:</label>
  					<input type="tel" name="newPhone" value="<?=$user->phone?>" pattern="[0-9]{9}">

  					<label for="first_name">E-Mail:</label>
  					<input type="email" name="newEmail" value="<?=$user->email?>">

					<h2>Default address</h2>
					<label for="first_name">Address:</label>
  					<input type="text" name="newAddress" value="<?=$user->address?>">

  					<button type="submit">Concluir</button>

  					<!--Concluir ediçao -->
				</form>
			</main>

<?php } ?>