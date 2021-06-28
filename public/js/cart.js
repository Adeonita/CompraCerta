
function loadCart() {
    const myCart = document.querySelector('#my-cart tbody')
    myCart.innerHTML = "";
    const cart = JSON.parse(localStorage.getItem('cestaCart'))
    for(const item of cart) {
        const total = Number(item.quantity) * Number(item.product.price)
        myCart.innerHTML = `
            ${myCart.innerHTML}
            <tr id="item-${item.product.id}" class="align-middle line-cart">
                <td>
                    <input class="change-quantity-button" type="number" min="1" max="10" value="${item.quantity}" product-id="${item.product.id}">
                </td>
                <td scope="row">
                    <img src="${item.product.imagePath}" class="rounded float-left product" alt="Produto"> 
                    ${item.product.name}
                </td>
                <td class="total">R$ ${total.toFixed(2).replace('.', ',')}</td>
                <td>
                    <button class="btn btn-danger btn-sm product-delete" product-id="${item.product.id}">
                        Excluir
                    </button>
                </td>
            </tr>
        `
    }
}

function changeQuantity(product_id, quantity) {
    const oldItems = JSON.parse(localStorage.getItem('cestaCart'));
    const item = oldItems.find(i => i.product.id === product_id);
    const index = oldItems.indexOf(item);
    item.quantity = quantity;
    oldItems[index] = item;
    const total = document.querySelector(`#item-${product_id} .total`);
    const newPrice = Number(quantity) * item.product.price;
    total.innerHTML = `R$ ${newPrice.toFixed(2)}`;
    localStorage.setItem('cestaCart', JSON.stringify(oldItems));
}

function loadChangeQuantityButtons() {
    const changeButtons = document.getElementsByClassName("change-quantity-button")
    for(const button of changeButtons) {
        button.onchange = function(e) {
            changeQuantity(Number(button.getAttribute("product-id")), e.target.value)
            showTotalCart()
        }
    }
}

function loadButtonDeleteProduct() {
    const deleteButtons = document.getElementsByClassName("product-delete")
    for(const button of deleteButtons) {
        button.addEventListener('click', function() {
            deleteItemCart(Number(button.getAttribute("product-id")))
            loadAllCart()
        })
    }
}

function deleteItemCart(product_id) {
    const cart = JSON.parse(localStorage.getItem("cestaCart"))
    const newCart = cart.filter(item => item.product.id !== product_id)
    localStorage.setItem('cestaCart', JSON.stringify(newCart))
}

function calcTotalCart() {
    const cart = JSON.parse(localStorage.getItem('cestaCart'))
    return cart.reduce((acc, item) => acc + (Number(item.product.price) * Number(item.quantity)), 0)
}

function showTotalCart() {
    document.querySelector('#totalCart').innerHTML = `R$ ${calcTotalCart().toFixed(2).replace('.', ',')}`
}

function loadAllCart() {
    loadCart()
    loadChangeQuantityButtons()
    showTotalCart()
    loadButtonDeleteProduct()
}

loadAllCart()