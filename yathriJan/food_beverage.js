<script>
let cartItems = [];

function addToCart(item, price) {
    cartItems.push({ item, price });
    updateCart();
}
function updateCart() {
const cartList = document.getElementById('cart-items');
const navCartList = document.getElementById('nav-cart-items');
cartList.innerHTML = '';
navCartList.innerHTML = ''; // Clear previous items in the navigation bar cart
cartItems.forEach(cartItem => {
    const li = document.createElement('li');
    li.textContent = `${cartItem.item} - Rs.${cartItem.price}`;
    cartList.appendChild(li);

    // Add cart item to the navigation bar cart
    const navLi = document.createElement('li');
    navLi.textContent = `${cartItem.item} - Rs.${cartItem.price}`;
    navCartList.appendChild(navLi);
});
}

function checkout() {
    alert('Your total amount is Rs.' + cartItems.reduce((total, item) => total + item.price, 0));
    cartItems = [];
    updateCart();
}
</script>