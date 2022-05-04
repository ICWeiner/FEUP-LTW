<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Brand Spanking NEW Unter Eats</title>
    </head>
<body>

    <header>
            <h1>NEW Unter Eats</h1>
            <a href="cart.php">Cart
            <img src="./TestImages/cartIcon.png" alt="cart icon"></a>
            <p>Nome de utilizador</p>
    </header>

    <!--Assumindo que no cart só pode ter coisas de um restaurante--> 
    <!--Depois põe-se lado a lado com css talvez-->
    <h1>Checkout</h1>
    <h2>Restaurant: Someplace Special - Porto</h2>
    
    <section class="shipping">
    <h4>Shipping information</h4>
    <div>
        <label>Address:
                <input type="text" name="name" value="Senhora da hora, Porto" required disabled>
        </label>
                <button>Edit address</button>
        
    </div>
        <p>Method of payment: Personal Card </p>
    </section>
    
    
    <section class="order">
    <h2>Your order</h2>
    <article>
        <p>Menu + monkey soup</p>
        
        <label>Quantity: </label>
        <button>+</button><input type="number" name="quantity" placeholder="quantity"><button>-</button>

        <p>Price: 26€</p>
        
    </article>
    <article>
        <p>Coca-Cola 2L</p>
        
        <label>Quantity: </label>
        <button>+</button><input type="number" name="quantity" placeholder="quantity"><button>-</button>

        <p>Price: 16€</p>
    </article>
    <hr>
    <p>Total price: <strong>56€</strong></p>
    </section>

    <footer>
        <p>Copyright &copy; LTW Project, 2022</p>
    </footer>
    
</body>
</html>