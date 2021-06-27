$(document).ready(() => {
    let userId = getLocalUserId();
    let addressData;
    if (userId) {
        addressData = getAddresses(userId);
    }
});


function getAddresses(id) {
    let data;
    let table = $("#address-table");
    $.get("/address/" + id, response => {
        data = response.message;
        console.log(data);
    }).done(() => {
        data.forEach(item => {
            let row = `
            <tr>
            <td >${item.cep}</td>
            <td >${item.public_area}</td>
            <td >${item.number}</td>
            <td >${item.district}</td>
            <td >${item.city}</td>
            <td >${item.state}</td>
            <td >${item.complement}</td>
            <td ><a class='btn btn-outline-success btn-sm mx-2 r-addres-button'
            href='{{ url("/address-option") }}'><i class='bi bi-pencil-fill'></i></a>
            </td>
            </tr>
            `;
            table.append(row);
        })
    });
}