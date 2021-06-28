function loadCartInput() {
    const cart = document.getElementById('cart')
    const cartData = localStorage.getItem('cestaCart')
    const userId = localStorage.getItem('userId')
    document.getElementById('user_id').value = userId
    cart.value = cartData
}

loadCartInput()