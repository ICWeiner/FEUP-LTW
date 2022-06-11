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



function encodeToJSONHelper(dishId, dishQuantity){
  const dish = {
    dishId: dishId,
    quantity: dishQuantity
  } 
  return dish;
}

function encodeCartToJSON(){
  const toSend = {}
  const dishArray = []
  dishjsonId = 0 

  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;

  const userId = document.querySelector('#cart p:first-of-type').textContent 

  const allDishesDiv = document.querySelectorAll('.orders > div')
    for (const dish of allDishesDiv){  //Para cada prato
      dishjsonId += 1  //ids diferentes para cada prato na string json
      //const dishName = dish.querySelector('p:first-of-type').textContent   //Pizza Margarita
      //const dishPrice = dish.querySelector('p:nth-of-type(2)').textContent  // 39.00€
      const dishQuantity = dish.querySelector('div input').value  // 4
      const dishId = dish.querySelector('p:nth-of-type(3)').textContent  // 4
      console.log(dishId)
      const jsonDish = encodeToJSONHelper(dishId, dishQuantity)
      dishArray.push(jsonDish)
    }
    toSend["items"] = dishArray
    const dishTotal = document.querySelector('.orders > p > strong').textContent
    toSend["total"] = dishTotal
    toSend["date"] = dateTime // data em que se fez a compra
    toSend["status"] = "Preparing" 
    const jsonToSend = JSON.stringify(toSend)

    return jsonToSend;
}

function encodeReviewToJSON(){
  const toSend = {}
  const dishArray = []
  dishjsonId = 0 

  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;

  const userId = document.querySelector('#cart p:first-of-type').textContent 

  const reviewDiv = document.querySelectorAll('.orders > div')

  toSend["items"] = dishArray
  const dishTotal = document.querySelector('.orders > p > strong').textContent
  toSend["total"] = dishTotal
  toSend["date"] = dateTime // data em que se fez a compra
  toSend["status"] = "Preparing" 
  const jsonToSend = JSON.stringify(toSend)

  return jsonToSend;
}

function removeElements(){
  const removeButtons = document.querySelectorAll('#cart .orders > div > button')
  for (btn of removeButtons){
    console.log(btn)
    const dishBox = btn.parentElement
    console.log(dishBox)
    btn.addEventListener('click', function(e){
      dishBox.remove()
      updateTotal()

    })
  }
}



function finalizeCart(){
  const btn = document.querySelector('#cart .orders #cartCheckout')
  btn.addEventListener('click', function(e){
    const jsonToSend = encodeCartToJSON()
    console.log(jsonToSend)
    const request = new XMLHttpRequest()
    request.open("POST", "testingAjax.php", true)
    request.setRequestHeader("Content-Type", "application/json")
    request.send(jsonToSend)

    request.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
      //alert(request.responseText); // faz um alert com a resposta do servidor
      alert("Compra finalizada com sucesso")
      window.location.href = window.location.protocol + "//" + window.location.host + "/" + "home.php";
     }
    }
  })

}

function stickStarRating(){
  const reviewSection = document.querySelector('.review')
  const starsDiv = reviewSection.querySelectorAll('.stars i')
  const starClass = reviewSection.querySelector('.stars')
  var score = reviewSection.querySelector('form > input')


  // index a começar em 0
  starsDiv.forEach(function(star, clickedIndex){
    star.addEventListener('click', function(e){
      starsDiv.forEach(function(otherStar, otherIndex){
        if (clickedIndex >= otherIndex){
          otherStar.className = "fas fa-star"
        }else{
          otherStar.className = "far fa-star"
        }
      })
      if (clickedIndex == 0){
        score.value = clickedIndex + 1
      }else{
        score.value = clickedIndex + 1
      }
      console.log('star' + star + ' of index ' + clickedIndex)
    })
  })
}



const searchRestaurant = document.querySelector('#searchrestaurant')
if (searchRestaurant) {
  searchRestaurant.addEventListener('input', async function() {
  const response = await fetch('api_restaurants.php?search=' + this.value)
  const restaurants = await response.json()


  const section = document.querySelector('#mainBody')
  const sectionCategory = document.querySelectorAll('#mainBody > section')
  const categoryName = document.querySelectorAll('#mainBody > .categoryName')

  for (cat of categoryName){
    cat.innerHTML = ''
  }

  for (sect of sectionCategory){
    sect.innerHTML = ''
  }

  const restaurantCategory = document.createElement('section')
  restaurantCategory.classList.add("category")

  const restaurantSection = document.createElement('section')
  restaurantSection.classList.add("restaurants")

  for (const rest of restaurants) {
    
    const restaurantDiv = document.createElement('div')
    restaurantDiv.classList.add("restaurantBox")
    //section com o link e a imagem dentro
    const insideSection = document.createElement('section')
    insideSection.classList.add("aspect-ratio-box")

    const restaurantLink = document.createElement('a')
    const restaurantImg = document.createElement('img')
    restaurantImg.src = 'TestImages/bread.jpg'  //-> substituir depois pelo path e imagem correta
    restaurantImg.style.width = '8.17em'
    restaurantImg.style.height = '7em'
    restaurantLink.href = 'restaurantPage.php?id=' + rest.id 

    const restaurantName = document.createElement('p')
    restaurantName.textContent = rest.name

    restaurantLink.appendChild(restaurantImg)
    restaurantDiv.appendChild(restaurantLink)
    restaurantDiv.appendChild(restaurantName)
    restaurantSection.appendChild(restaurantDiv)
    restaurantCategory.appendChild(restaurantSection)
    section.appendChild(restaurantSection)
  }
  
  })
}


// Verifica se está na cart page antes de chamar essas funções: evita erros na consola
if (window.location.pathname == "/cart.php"){
  updateTotal()
  removeElements()
  finalizeCart()
}

if (window.location.pathname == "/restaurantPage.php"){
  stickStarRating()
}







