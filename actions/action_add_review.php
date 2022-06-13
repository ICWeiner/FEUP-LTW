<?php
	declare(strict_types = 1);

	session_start();

	require_once(__DIR__ . '/../database/connection.db.php');
	require_once(__DIR__ . '/../database/review.class.php');

	$db = getDatabaseConnection();
    $id = intval($_POST['restaurantid']);

    Review::addReview($db, $_POST['comment'], intval($_POST['score']), $id, $_SESSION['id']);

    /*TODO: Ficar no restaurante em vez de ir pra home */

    /*header('Location: restaurantPage?id=<?=$id?>.php');*/
    header('Location: /../home.php');
	
	
?>