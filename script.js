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


function attachBuyEvents(){

  const buttons = document.querySelectorAll('.dishes button')
  for (const btn of buttons){
    btn.addEventListener('click', function(e){
      dish = this.parentElement
      const dishImage = dish.querySelector('img')   //<img src="TestImages/bread.jpg" alt="foto do prato">
      const dishName = dish.querySelector('p')      //<p>Sundae</p>
      const dishPrice = dish.querySelector('p:nth-of-type(2)')   //<p>1.5€</p>
      const dishQuantity = dish.querySelector('input')  //<input value="1" ...>
})}
}

attachBuyEvents()


  
