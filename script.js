let incrementButton = document.getElementById('plus')
let decrementButton = document.getElementById('minus')
let quantity = document.getElementById('qtyBox')

incrementButton.addEventListener('click', function(e) {
  quantity.value = parseInt(quantity.value) + 1
})

decrementButton.addEventListener('click', function(e) {
  quantity.value = parseInt(quantity.value) - 1
})
