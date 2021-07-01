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
            <td><a class='btn btn-outline-success btn-sm mx-2 r-addres-button' onclick='myFunction(${item.id})'>
            <i class='bi bi-pencil-fill'></i>
            </a>
            </td>
            </tr>
            `;
            table.append(row);
        })
    });
}


function myFunction(addressId) {
    var qs = $.param(addressess[addressId]);
    window.location.href = '/address-option?' + qs;
}
