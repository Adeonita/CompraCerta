$(document).ready(() => {
    let userId = getLocalUserId();
    if (userId) {
        addressData = getHistory(userId);
    }
});

var historyCart = [];
var historyData = [];
let actualCart = 0;

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
            let review = `
                <a data-placement="top" class="btn btn-outline-primary disabled"
                title="Avaliar Compra" onclick="evaluateCart(${item.cart_id})"
                ><i class="bi bi-star"></i></a>
                `;
            if (item.status == 'finalizado') {
                review = `
                <a data-placement="top" class="btn btn-primary"
                title="Avaliar Compra" onclick="evaluateCart(${item.cart_id})"
                data-bs-toggle="modal" data-bs-target="#evaluateModal"
                ><i class="bi bi-star"></i></a>
                `
            }
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
                                                            ${review}
                                                             <a data-placement="top" class="btn btn-secondary"
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
            product.imagePath = "images/products/" + product.imagePath;
            addItemToCart(product, product.amount);


        })
        alert('Seus itens foram adicionados ao carrinho');
        window.location.href = '/cart';
    }
}

function showCart(cartId) {
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

function evaluateCart(cartId) {
    actualCart = cartId;
    $.get(`/reviews/${cartId}`, response => {
        if (response.success && response.message != "Not Found") {
            $("#evaluate").addClass("d-none");
            $("#evaluated").removeClass("d-none");
            $(`#my_star-${response.message.score}`).attr("checked", "checked");
            if (response.message.comment) {

                $("#my-comment").text(response.message.comment);
            } else {
                $("#my-comment").text("Avaliação sem comentários.");

            }
        } else {
            $("#evaluated").addClass("d-none");
            $("#evaluate").removeClass("d-none");
        }
    })
}

function sendEvaluate() {
    let scores = document.getElementsByName("fb");
    let score = 0;
    for (let item = 0; item < 6; item++) {
        if (scores[item].checked == true) {
            score = item;
        }
    }
    let review = {
        comment: document.getElementById('commentEvaluate').value,
        cart_id: actualCart,
        score: score
    }
    if (review.score > 0 && review.score < 6) {

        $.post('/reviews', review).done(response => {
            if (response.success == true) {
                alert("Avaliação Salva!");
            } else {
                alert("Não foi possível salvar sua avaliação.");
            }
        });
        window.location.href = '/historic-page';
    } else {
        alert("Selecione sua avaliação");
    }
}

$("#btnSendEvaluate").click(() => sendEvaluate())

$("#evaluated").click(false);