import './bootstrap';
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function () {
            addToCart(
                this.dataset.id,
                this.dataset.name,
                this.dataset.price
            );
        });
    });
});

let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(id, name, price) {
    let product = cart.find(item => item.id === id);

    if (product) {
        product.quantity++;
    } else {
        cart.push({ id, name, price, quantity: 1 });
    }

    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
}

function updateCartCount() {
    document.getElementById("cart-count").innerText = cart.length;
}

updateCartCount();


function displayCart() {
    let container = document.getElementById("cart-items");
    let total = 0;
    container.innerHTML = "";

    cart.forEach(item => {
        total += item.price * item.quantity;

        container.innerHTML += `
            <div>
                <h3>${item.name}</h3>
                <p>${item.price} x ${item.quantity}</p>
                <button onclick="removeItem(${item.id})">Remove</button>
            </div>
        `;
    });

    document.getElementById("total").innerText = total;
}

function removeItem(id) {
    cart = cart.filter(item => item.id !== id);
    localStorage.setItem("cart", JSON.stringify(cart));
    displayCart();
    updateCartCount();
}

displayCart();
