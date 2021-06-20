function disableForm() {

    if (document.getElementById("formProfile").disabled == true) {
        document.getElementById("formProfile").disabled = false;
    } else {
        document.getElementById("formProfile").disabled = true;
    }
}

async function updateData() {

    let userData = {
        name: document.getElementById("nameUserProfile").value,
        last_name: document.getElementById("lastNameUserProfile").value,
        cpf: document.getElementById("cpfUserProfile").value,
        email: document.getElementById("emailUserProfile").value,
        birth_date: document.getElementById("birthUserProfile").value,
    };
    let isValid = checkFields(userData);
    let res;
    if (isValid) {
        res = await updateUser(userData);
    } else {
        alert('Existe campo(s) inválido(s)');
    }
}


function updateUser(userData) {
    let response = $.post("http://localhost/users/update/",
        userData).done((response) => {
        if (response.status == 400) {
            alert('Erro ao atualizar usuário');
        } else {
            alert("Usuário atualizao com sucesso!");
            return false;
        }
    });
    return response;
}

function checkFields(data) {
    for (let field in data) {
        if (data[field] == '') {
            console.log(field, data[field]);
            return false;
        }
    }
    if (data.name.length < 3 || data.last_name.length < 3 || data.cpf.length != 11) {
        return false;
    }
    return true;

}
