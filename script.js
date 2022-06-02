function increase(inputBox){
  inputBox.value = parseInt(inputBox.value, 10) + 1
  console.log(inputBox.value)
  //let elem = document.getElementById(inputBox); 
  //console.log(inputBox)
  //inputBox.value = parseInt(inputBox.value) + 1; 
  //elem.value=elem.value +1;
} 

function decrease(inputBox){
  inputBox = inputBox - 1
  console.log(inputBox)
  //console.log(inputBox)
  //inputBox.value = parseInt(inputBox.value) - 1; 
} 

function attachBuyEvents(){
  const buttons = document.querySelectorAll('.dishes button')
  for (const btn of buttons){
    btn.addEventListener('click', function(e){
      dish = this.parentElement
      const dishID = dish.getAttribute('id')
      const dishImage = dish.querySelector('img')   //<img src="TestImages/bread.jpg" alt="foto do prato">
      const dishName = dish.querySelector('p')      //<p>Sundae</p>
      const dishPrice = dish.querySelector('p:nth-of-type(2)')   //<p>1.5€</p>
      const dishQuantity = dish.querySelector('input')  //<input value="1" ...>
      
      addItemToCart(dishID, dishName.textContent, dishPrice.textContent, dishQuantity.value)
})}
}

function addItemToCart(id, name, price, quantity){
  const orderSection = document.querySelector('.orders')
  
  const dishDiv = document.createElement('div')
  dishDiv.setAttribute('id', id)  //id único

  //dish name
  const dishName = document.createElement('p') 
  dishName.textContent = name
  dishDiv.appendChild(dishName)

  /* ===========================  For the input box  ============================*/
  const inputDiv = document.createElement('div')
  const inputQuantity = document.createElement('input')

  // minus button
  const minusButton = document.createElement('button')
  minusButton.textContent = '-'
  //minusButton.addEventListener('click', decrease(inputQuantity))
  inputDiv.appendChild(minusButton)

  // dish quantity
  inputQuantity.type = 'number'
  inputQuantity.value = quantity
  inputDiv.appendChild(inputQuantity)
  dishDiv.appendChild(inputDiv)

  // plus button
  const plusButton = document.createElement('button')
  plusButton.textContent = '+'
  //plusButton.addEventListener('click', increase(inputQuantity)) 
  inputDiv.appendChild(plusButton)

  /* ================================  End of input box  ===============================*/
  

  //dish price
  const dishPrice = document.createElement('p') 
  dishPrice.textContent = price
  dishDiv.appendChild(dishPrice)


  orderSection.appendChild(dishDiv)
  
}

attachBuyEvents()


  
