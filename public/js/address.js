$.get("http://localhost/states", function(data) {
    data.forEach(item => {
        $('#stateList').append($('<option>', {
            value: item.id,
            text: item.name
        }));
    });
});


$('#address-form').on('submit', e => {
    postForm();
    e.preventDefault();
})

async function postForm() {
    addressData = {
        public_area: document.getElementById("streetUserRegister").value,
        number: document.getElementById("numberUserRegister").value,
        district: document.getElementById("districtUserRegister").value,
        complement: document.getElementById("complementUserRegister").value,
        cep: document.getElementById("cepUserRegister").value,
        user_id: 6,
        state_id: document.getElementById("stateList").value,
    };
    // city: document.getElementById("cityUserRegister").value,

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