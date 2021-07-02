$(document).ready(() => {
    let userId = getLocalUserId();
    if (userId) {
        addressData = getHistory(userId);
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
                                                        <p>Pedido nº ${item.cart_id}, Valor: R$ ${formatMoney(total)}</p>

                                                        <a data-placement="top" class="btn btn-info"
                                                            title="Repetir Compra" onclick="printCart(${item.cart_id})"
                                                            id="btnRepetirCompra"><i class="bi bi-arrow-counterclockwise"></i></a>

                                                             <a data-placement="top" class="btn btn-secondddary"
                                                            title="Visualizar Compra" onclick="showCart(${item.cart_id})"
                                                            data-bs-toggle="modal" data-bs-target="#cartModal"
                                                            ><i class="bi bi-eye"></i></a>

                                                    </div>
                                                    <div class="col-md-12 historic-date">
                                                        <p>Pagamento feito em: ${item.created_at.toLocaleString().slice(0,10).replace(/\-/g, '/') }
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
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

function showCart(cartId) {
    console.log(cartId)
    let cartItems = [];
    let table = $("#cart-table-rows");
    let tableTmp = '';
    for (let item in historyData) {
        if (historyData[item].cart_id == cartId) {
            cartItems.push(historyData[item]);
        }
    }
    total = 0
    cartItems.forEach(
        item => {
            totalItem = item.price * item.amount
            let row = `
                <tr class='mx-1'>
                <td>${item.amount}</td>
                <td>${item.name}</td>
                <td>${formatMoney(item.price)}</td>
                <td>${formatMoney(totalItem)}</td>
                </td>
                </tr>
                `;
            total = total + totalItem;
            tableTmp += row;
        })
    let rowTotal = `
                <tr class='mx-1'>
                <td></td>
                <td></td>
                <td><h5>Total</h5></td>
                <td><h5>${formatMoney(total)}</h5></td>
                </td>
                </tr>
                `;
    tableTmp += rowTotal;
    table.html(tableTmp);
    $("#cart-total").val(`Total: R$ ${total}`)
}



//category_id, decription, id, imagePath, name, price, quatity