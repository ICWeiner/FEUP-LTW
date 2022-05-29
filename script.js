function increase(inputBox){
  //let elem = document.getElementById(inputBox); 
  console.log(inputBox)
  inputBox.value = parseInt(inputBox.value) + 1; 
  //elem.value=elem.value +1;
} 

function decrease(inputBox){
  console.log(inputBox)
  inputBox.value = parseInt(inputBox.value) - 1; 
} 


function addItemToCart(name, price, quantity){
  dishesParent = document.querySelectorAll('.dishes button')

  for (const addToCart of dishesParent){
    addToCart.addEventListener('click', function(){
      const dishesClass = this.parentElement
      console.log(dishesClass)
      console.log("olá anete")

      name = dishesClass.querySelector('p').textContent
      price = dishesClass.querySelector('.dishes ').value

      console.log(name)
      console.log(price)

    })
  }

  const section = document.querySelector()
}