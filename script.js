function increase(inputBox, originalPrice){
  if (inputBox.value >= 100){
    inputBox.value = 100
  }else{
    inputBox.value = parseInt(inputBox.value, 10) + 1
  }
  updateDishPrice(inputBox, originalPrice)
} 


function decrease(inputBox, originalPrice){
  if (inputBox.value <= 0){
    inputBox.value = 0
  }else{
    inputBox.value = parseInt(inputBox.value, 10) - 1
  }
  updateDishPrice(inputBox, originalPrice)
} 

function updateDishPrice(quantity, originalPrice){
  const currentDiv = quantity.parentElement.parentElement  // <div id="dishBox_7"></div>
  const currentPrice = currentDiv.querySelector('p:nth-of-type(2)')//<p>7.8€</p>
  
  const newPrice = (quantity.value * originalPrice).toFixed(2)  // Novo preço de acordo com o preço original e e quantidade inserida

  currentPrice.innerHTML = newPrice + "€"
  updateTotal()
}

function updateTotal(){
  const totalHTML = document.querySelector('.orders > p > strong') //<strong>0</strong>
  newTotal = 0

  const dishes = document.querySelectorAll('.orders > div')
  for (const dish of dishes){
    dishPrice = dish.querySelector('p:nth-of-type(2)').textContent
    console.log(dishPrice)
    newTotal = newTotal + parseFloat(dishPrice)
  }

  console.log(newTotal)
  totalHTML.innerHTML = newTotal.toFixed(2) + "€"
}

