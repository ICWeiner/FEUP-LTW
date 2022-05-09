<?php 
	declare(strict_types = 1); 

	require_once('templates/common.tpl.php');

	//later, take this array out and read this data from DB instead
	$users = array(
		array('name'=> 'Diogo','phone'=> '12321424','email'=> 'diogo@gmail.com','address'=> 'Wouldnt you like to know, weather boy', 'postcode'=> '1234-567', 'country'=> 'Portugal, most of the time' )
	);

	drawHeader();
	drawProfile(users);
	drawFooter();
?>

