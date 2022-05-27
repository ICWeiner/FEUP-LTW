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
					<a href="action_edit_profile.php" class="button">editar</a>
				</div><!--added divs to make it clear that i mean for these to be seperate -->
				<div>
					<h2>Default address</h2>
					<p><?=$user->address?></p>
					<a href="action_edit_profile.php" class="button">editar</a>
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
				<div>
					<h2>Informação de contacto</h2>

					<label for="first_name">First Name:</label>
  					<input id="first_name" type="text" name="first_name" value="<?=$user->name?>">

  					<label for="first_name">First Name:</label>
  					<input id="first_name" type="text" name="first_name" value="<?=$user->phone?>">

  					<label for="first_name">First Name:</label>
  					<input id="first_name" type="text" name="first_name" value="<?=$user->email?>">

				</div><!--added divs to make it clear that i mean for these to be seperate -->
				<div>
					<h2>Default address</h2>
					<label for="first_name">First Name:</label>
  					<input id="first_name" type="text" name="first_name" value="<?=$user->address?>">

  					<a href="action_edit_profile.php" class="button">Concluir</a><!--Concluir ediçao -->
				</div>
			</main>

<?php } ?>