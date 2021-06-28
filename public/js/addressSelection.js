$(document).ready(() => {
    let userId = getLocalUserId();
    let addressData;
    if (userId) {
        addressData = getAddresses(userId);
    }
});

var addressess = [];

function getAddresses(id) {
    let data;
    let table = $("#address-table");
    $.get("/address/" + id, response => {
        data = response.message;
    }).done(() => {
        data.forEach(item => {
            addressess[item.id] = item;

            let row = `
            <tr class='mx-1'>
            <td>${item.cep}</td>
            <td>${item.public_area}</td>
            <td>${item.number}</td>
            <td>${item.district}</td>
            <td>${item.city}</td>
            <td>${item.state}</td>
            <td>${item.complement}</td>
            <td><a class='btn btn-outline-primary btn-sm mx-2 r-addres-button' onclick='saveAddressDelivery(${item.id})'>
            <i class="bi bi-check-circle-fill"></i>
            </a>
            </td>
            </tr>
            `;
            table.append(row);
        })
    });
}


function saveAddressDelivery(address) {
    localStorage.setItem("deliveryAddress", address);
    window.location.href = '/payment';

}
