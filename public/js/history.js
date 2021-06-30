$(document).ready(() => {
    let userId = getLocalUserId();
    if (userId) {
        addressData = getHistory(userId);
        console.log(historyCart);

    }
});

var historyCart = [];

function getHistory(userId) {
    let data;
    let table = $("#myHistoric");
    $.get(`/cart/get/${userId}/`, response => {
        data = response;
    }).done(() => {
        data.forEach(item => {
            historyCart[item.cart_id] = item;
        });
        historyCart.forEach(item => {
            let items = data.filter(value => {
                return value.cart_id == item.cart_id;
            });
            console.log(items);
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
                                            <p>Pedido nº ${item.cart_id},Valor: R$ ${total.toFixed(2).replace('.', ',')}</p>
                                            <a data-placement="top" class="btn btn-info"
                                                href="#" title="Repetir Compra"
                                                id="btnRepetirCompra"><i class="bi bi-arrow-bar-up"></i></a>
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
