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


  
if (window.location.pathname == "/restaurantPage.php"){
    stickStarRating()
  }