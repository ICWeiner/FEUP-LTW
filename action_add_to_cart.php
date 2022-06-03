<?php
  declare(strict_types = 1);

  session_start();

  if (!isset($_SESSION['id'])) die(header('Location: /'));

  require_once('database/connection.db.php');
  require_once('database/cart.class.php');

  $db = getDatabaseConnection();

  $id = intval($_GET['id']);

  //if (!isset($_SESSION['cart'][$id])) 
  //$_SESSION['cart'][$id] = 0;
  //$_SESSION['cart'][$id]++;   //aumentar a quantidade de coisas no carrinho para aquele id 

  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array($id);
  }else{
    array_push($_SESSION['cart'], $id);
  }
  

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>