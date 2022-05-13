<?php 
    declare(strict_types = 1); 

    require_once('templates/common.tpl.php');

    //TODO: take this array out and read this data from DB instead
    $orders = array(
        array('name' => 'Menu + monkey soup','price'=>'26'),
        array('name' => 'Coca-Cola 2L','price'=>'16')
    );

    drawHeader();
    drawCart($orders);
    drawFooter();
?>

<!--<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/layout.css" rel="stylesheet">
        <title>Brand Spanking NEW Unter Eats</title>
    </head>
<body>

    <header>
            <h1>NEW Unter Eats</h1>
            <a href="cart.php">Cart
            <img src="./TestImages/cartIcon.png" alt="cart icon"></a>
            <p>Nome de utilizador</p>
    </header>
    
    <footer>
        <p>Copyright &copy; LTW Project, 2022</p>
    </footer>
    
</body>
</html>
-->