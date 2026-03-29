function changeQty(value) {
    let qty = document.getElementById('qty');
    let hidden = document.getElementById('hiddenQty');

    let current = parseInt(qty.value);

    if (current + value > 0) {
        qty.value = current + value;
        hidden.value = qty.value;
    }
}



function changeQty(amount) {
    let qty = document.getElementById("qty");
    let value = parseInt(qty.value);

    value = value + amount;

    if (value < 1) value = 1;

    qty.value = value;
}




function changeQty(value) {
    let qty = document.getElementById('qty');
    let current = parseInt(qty.value);

    current += value;

    if (current < 1) current = 1;

    qty.value = current;
}



function changeQty(button, change) {

    let container = button.closest('.card');

    let input = container.querySelector('.qty-input');
    let priceText = container.querySelector('p');
    let totalText = container.querySelector('.item-total');

    let price = parseFloat(priceText.innerText.replace('$', ''));

    let value = parseInt(input.value);
    value = value + change;

    if (value < 1) value = 1;

    input.value = value;

   
    let newTotal = price * value;
    totalText.innerText = '$' + newTotal.toFixed(2);

    updateCartTotal();
}

function updateCartTotal() {

    let items = document.querySelectorAll('.item-total');

    let subtotal = 0;

    items.forEach(el => {
        subtotal += parseFloat(el.innerText.replace('$', ''));
    });

    let shipping = 10;

 
    document.getElementById('cart-subtotal').innerText = '$' + subtotal.toFixed(2);

  
    document.getElementById('cart-total').innerText = '$' + (subtotal + shipping).toFixed(2);
}






