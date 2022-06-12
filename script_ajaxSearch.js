// Cria o div com o restaurante quando o custumer procura por um restaurant
function createRestaurantDiv(rest){
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
  
    return restaurantDiv
}


// Cria o div com o restaurante quando o custumer procura por um prato
function createRestaurantDishDiv(dish){
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
    restaurantLink.href = 'restaurantPage.php?id=' + dish.restaurant 

    const restaurantName = document.createElement('p')
    restaurantName.textContent = dish.restaurantName

    restaurantLink.appendChild(restaurantImg)
    restaurantDiv.appendChild(restaurantLink)
    restaurantDiv.appendChild(restaurantName)
  
    return restaurantDiv
}




const searchRestaurant = document.querySelector('#searchrestaurant')
if (searchRestaurant) {
  searchRestaurant.addEventListener('input', async function() {
  const restaurantResponse = await fetch('api_restaurants.php?search=' + this.value)
  const restaurants = await restaurantResponse.json()
  console.log(restaurants)

  const dishResponse = await fetch('api_dishes.php?search=' + this.value)
  const dishes = await dishResponse.json()
  console.log(dishes)

  const section = document.querySelector('#mainBody')
  const sectionCategory = document.querySelectorAll('#mainBody > section')
  const categoryName = document.querySelectorAll('#mainBody > .categoryName')

  // Limpar o body todo quando se começa a pesquisa
  for (cat of categoryName){
    cat.innerHTML = ''
  }
  for (sect of sectionCategory){
    sect.innerHTML = ''
  }
  //============

  const restaurantCategory = document.createElement('section')
  restaurantCategory.classList.add("category")

  const restaurantSection = document.createElement('section')
  restaurantSection.classList.add("restaurants")

  


  // Para cada restaurant que vem da DB desenha o seu div e adiciona à section
  for (const rest of restaurants) {

    

    const restaurantDiv = createRestaurantDiv(rest)
    restaurantSection.appendChild(restaurantDiv)
    restaurantCategory.appendChild(restaurantSection)
    section.appendChild(restaurantSection)
  }


  for (dish of dishes){
    const restaurantDishDiv = createRestaurantDishDiv(dish)
    restaurantSection.appendChild(restaurantDishDiv)
    restaurantCategory.appendChild(restaurantSection)
    section.appendChild(restaurantSection)
  }
  
})
}











