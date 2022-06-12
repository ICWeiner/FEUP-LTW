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











