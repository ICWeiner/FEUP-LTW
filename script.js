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
    newTotal = newTotal + parseFloat(dishPrice)
  }

  totalHTML.innerHTML = newTotal.toFixed(2) + "€"
}

updateTotal()


function encodeToJSONHelper(dishName, dishPrice, dishQuantity){
  const dish = {
      name: dishName, 
      price:  dishPrice,
      quantity: dishQuantity
  } 
  return dish;
}

function encodeToJSON(){
  const toSend = {}

  dishjsonId = 0 

  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;

  const allDishesDiv = document.querySelectorAll('.orders > div')
    for (const dish of allDishesDiv){  //Para cada prato
      dishjsonId += 1  //ids diferentes para cada prato na string json
      const dishName = dish.querySelector('p:first-of-type').textContent   //Pizza Margarita
      const dishPrice = dish.querySelector('p:nth-of-type(2)').textContent  // 39.00€
      const dishQuantity = dish.querySelector('div input').value  // 4
      const jsonDish = encodeToJSONHelper(dishName, dishPrice, dishQuantity)
      toSend[dishjsonId] = jsonDish
    }
    const dishTotal = document.querySelector('.orders > p > strong').textContent
    toSend["total"] = dishTotal
    toSend["date of purchase"] = dateTime // data em que se fez a compra
    const jsonToSend = JSON.stringify(toSend)

    return jsonToSend;
}



