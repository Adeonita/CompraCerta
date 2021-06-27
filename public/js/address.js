$('#address-form').on('submit', e => {
    postForm();
    e.preventDefault();
})

$.get("http://localhost/states", function(data) {
    data.forEach(item => {
        $('#stateList').append($('<option>', {
            value: item.id,
            text: item.name,
        }));
    });
    if (addressData) {
        $("#stateList").val(addressData.state_id);
    }
});


async function postForm() {

    addressForm = {
        public_area: document.getElementById("streetUserRegister").value,
        number: document.getElementById("numberUserRegister").value,
        district: document.getElementById("districtUserRegister").value,
        complement: document.getElementById("complementUserRegister").value,
        cep: document.getElementById("cepUserRegister").value,
        user_id: getLocalUserId(),
        state_id: document.getElementById("stateList").value,
        city: document.getElementById("cityUserRegister").value,
    };

    if (addressData.id) {
        addressForm = {...addressForm, id: addressData.id }
        updateAddress(addressForm);
    } else {
        let res = await createAddress(addressForm);
    }

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


function updateAddress(data) {
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

var adressData;
$(document).ready(() => {


    addressData = location.getParams();
    if (Object.entries(addressData).length > 1) {

        document.getElementById("streetUserRegister").value = addressData.public_area;
        document.getElementById("numberUserRegister").value = addressData.number;
        document.getElementById("districtUserRegister").value = addressData.district;
        document.getElementById("complementUserRegister").value = addressData.complement;
        document.getElementById("cepUserRegister").value = addressData.cep;
        document.getElementById("cityUserRegister").value = addressData.city;
    }
});