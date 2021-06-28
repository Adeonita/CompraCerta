const purchaseButton = document.getElementById("purchase-button");
const localStorage = window.localStorage;

function addItemToCart(product, quantity) {
    let cart = JSON.parse(localStorage.getItem('cestaCart'));
    if( !cart ) {
        cart = []
    }
    const productExist = cart.find(i => i.product.id === product.id)
    if( productExist ) {
        const index = cart.indexOf(productExist)
        productExist.quantity = Number(productExist.quantity) + Number(quantity)
        cart[index] = productExist;
    } else {
        cart.push({
            product,
            quantity
        })
    }
    localStorage.setItem('cestaCart', JSON.stringify(cart));
}

purchaseButton.addEventListener('click', function() {
    const product = JSON.parse(purchaseButton.getAttribute("product"));
    const quantity = document.getElementById("quantity");
    addItemToCart(product, quantity.value);
    window.location.href = '/cart'
});