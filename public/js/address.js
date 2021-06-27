$('#address-form').on('submit', e => {
    postForm();
    e.preventDefault();
})

$.get("http://localhost/states", function(data) {
    data.forEach(item => {
        $('#stateList').append($('<option>', {
            value: item.id,
            text: item.name
        }));
    });
});
async function postForm() {
    addressData = {
        public_area: document.getElementById("streetUserRegister").value,
        number: document.getElementById("numberUserRegister").value,
        district: document.getElementById("districtUserRegister").value,
        complement: document.getElementById("complementUserRegister").value,
        cep: document.getElementById("cepUserRegister").value,
        user_id: 6,
        state_id: document.getElementById("stateList").value,
        city: document.getElementById("cityUserRegister").value,
    };

    let res = await createAddress(addressData);

}

function createAddress(data) {
    let response = $.post("http://localhost/address/",
        data).done((response) => {
        if (response.success) {
            alert("Endereço adicionado com sucesso!")
        } else {
            alert("Não foi possível criar novo endereço.")
        }
    });
    return response;
}


function getParams() {
    var result = {};
    var tmp = [];
    var reg = /\+/g;

    location.search
        .substr(1)
        .split("&")
        .forEach(function(item) {
            tmp = item.split("=");
            result[tmp[0]] = decodeURIComponent(tmp[1]);
        });
    Object.entries(result).forEach(([key, item]) => {
        result[key] = item.replace(reg, ' ');
    })
    return result;
}

location.getParams = getParams;
$(document).ready(() => {


    let address = location.getParams();
    if (Object.entries(address).length > 1) {

        document.getElementById("streetUserRegister").value = address.public_area;
        document.getElementById("numberUserRegister").value = address.number;
        document.getElementById("districtUserRegister").value = address.district;
        document.getElementById("complementUserRegister").value = address.complement;
        document.getElementById("cepUserRegister").value = address.cep;
        document.getElementById("cityUserRegister").value = address.city;
        $("#stateList").val(address.state_id).change();
    }
    // user_id: 6,
});