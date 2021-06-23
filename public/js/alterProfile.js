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
        if (response.success == false) {
            alert('Erro ao atualizar usuário');
        } else {
            alert("Usuário atualizao com sucesso!");
        }
    });
    return response;
}

function checkFields(data) {
    for (let field in data) {
        if (data[field] == '') {
            return false;
        }
    }
    if (data.name.length < 3 || data.last_name.length < 3 || data.cpf.length != 11) {
        return false;
    }
    return true;

}


async function updatePassword() {
    let passwordData = {
        password: document.getElementById("passwordActual").value,
        new_password: document.getElementById("newPassword").value,
        control_password: document.getElementById("newPasswordCheck").value,
        email: "teste@gmail.com"
    }
    let isCorrectPassword = checkFieldsById("newPassword", "newPasswordCheck");
    let response;
    let feedback = ''
    if (passwordData.password.length > 5 && isCorrectPassword) {
        response = await updateUserPassword(passwordData);
        if (response.success) {
            feedback = "Senha Alterada com sucesso";
        } else {
            feedback = response.message;
        }
    } else {
        feedback = "Dados incorretos";
    }
    alert(feedback);
}

function updateUserPassword(data) {
    let response = $.post("http://localhost/users/password",
        data);
    return response;
}