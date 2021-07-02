$(document).ready(() => {
    let userId = getLocalUserId();
    if (userId) {
        addressData = getHistory(userId);
        console.log("end",
            historyCart);

    }
});

var historyCart = [];
var historyData = [];

function getHistory(userId) {
    let data;
    let table = $("#myHistoric");
    $.get(`/cart/get/${userId}/`, response => {
        data = response;
        historyData = data;
    }).done(() => {
        data.forEach(item => {
            historyCart[item.cart_id] = item;
        });
        historyCart.forEach(item => {
            let items = data.filter(value => {
                return value.cart_id == item.cart_id;
            });
            console.log("items", items);
            let total = 0
            items.forEach(item => total += item.price * item.amount);
            let row = `
                                    <div class="historic-body mt-3">
                                        <div class="row user-panel-historic">
                                            <div class="col-md-11 control-panel">
                                                <div class="row user-panel-historic">
                                                    <div class="col-md-12 my-1">
                                                        <div class="pull-right">
                                                            <label class="label label-danger">Estado da Compra
                                                                <fieldset disabled>
                                                                    <div class="form-group">
                                                                        <select class="form-control"
                                                                            id="historicStateControl">
                                                                            <option id="complete">${item.status}</option>
                                                                        </select>
                                                                    </div>
                                                                    <fieldset>
                                                            </label>
                                                        </div>
                                                        <p>Pedido nº ${item.cart_id},Valor: R$ ${formatMoney(total)}</p>
                                                        <a data-placement="top" class="btn btn-info"
                                                            title="Repetir Compra" onclick="printCart(${item.cart_id})"
                                                            id="btnRepetirCompra"><i class="bi bi-arrow-counterclockwise"></i></a>
                                                    </div>
                                                    <div class="col-md-12 historic-date">
                                                        <p>Pagamento feito em: ${item.created_at.toLocaleString().slice(0,10).replace(/\-/g, '/') }
                                                        <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            `;
            table.append(row);
        })

    });
}

function printCart(cartId) {
    let cartItems = []
    for (let item in historyData) {
        if (historyData[item].cart_id == cartId) {
            cartItems.push(historyData[item]);
        }
    }
    if (cartItems.length > 0) {
        console.log("cart", cartItems);
        localStorage.removeItem("cestaCart");
        cartItems.forEach(product => {
            cartProduct = {
                id: product.id,
                category_id: product.category_id,
                decription: product.decription,
                imagePath: "images/products/" + product.imagePath,
                name: product.name,
                price: product.price,
            };

            addItemToCart(cartProduct, product.amount);

        })
        alert('Sua compra foi para o carrinho');
        window.location.href = '/cart';
    }
}

//category_id, decription, id, imagePath, name, price, quatity