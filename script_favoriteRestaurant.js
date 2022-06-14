

function addFavorite(){
    heartIcons = document.querySelectorAll('.restaurantBox i')
    
    heartIcons.forEach(function(heart, index){

        heart.addEventListener('click', function(e){
            console.log(heart) 
            restaurantId = heart.className.split(' ').pop() // para aceder ao restaurnat id 
            console.log(restaurantId)  
            let request = new XMLHttpRequest()
            request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("demo").innerHTML = this.responseText;
                heart.className = "fas fa-heart "  + restaurantId
            }
            };
            console.log(heart) 
            var url = "favorite_restaurant.php?restaurantId="  + restaurantId 

            request.open("GET", url, true)
            request.send()
            
        })
    })
}

    
addFavorite()