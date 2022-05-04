<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
    </head>
<body>
    <!--Assumindo que no cart só pode ter coisas de um restaurante--> 
    <!--Depois põe-se lado a lado com css talvez-->
    <h1>Checkout</h1>
    <h2>Restaurant: Someplace Special - Porto</h2>
    
    <section class="shipping">
    <h4>Shipping information</h4>
    <div>
        <label>Adress:
                <input type="text" name="name" value="Senhora da hora, Porto" required disabled>
        </label>
                <button>Edit adress</button>
        
    </div>
        <p>Method of payment: Personal Card </p>
    </section>
    
    
    <section class="order">
    <h2>Your order</h2>
    <article>
        <h4>Fish</h4>
        <img src="testImages/fish.jpg" alt="foto do prato">
        <p>Price: 26€</p>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
        
        <label>Quantity: </label>
        <button>+</button><input type="number" name="quantity" placeholder="quantity"><button>-</button>
        
        
    </article>
    <article>
        <h4>Meat</h4>
        <img src="testImages/meat.jpg" alt="foto do prato">
        <p>Price: 30€</p>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
        <label>Quantity: </label>
            <button>+</button><input type="number" name="quantity" placeholder="quantity"><button>-</button>
    </article>
    <h4>Total price: 56€</h4>
    </section>

    <footer>
        <p>Copyright &copy; LTW Project, 2022</p>
    </footer>
    
</body>
</html>