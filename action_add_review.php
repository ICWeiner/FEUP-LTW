<?php
	declare(strict_types = 1);

	session_start();

	require_once('database/connection.db.php');
	require_once('database/review.class.php');

	$db = getDatabaseConnection();
    $id = intval($_GET['id']);


    Review::addReview($db, $_POST['comment'], intval($_POST['score']), $id, $_SESSION['id']);

    /*TODO: Ficar no restaurante em vez de ir pra home */

    /*header('Location: restaurantPage?id=<?=$id?>.php');*/
    header('Location: home.php');
	
	
?>