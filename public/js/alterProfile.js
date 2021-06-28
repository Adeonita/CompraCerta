$(document).ready(() => {

    let userId = getLocalUserId();
    getUserData(userId);
    if (!userId) {
        window.location.href = '/';
    }

});

var userData;

function getUserData(userId) {
    $.get(`http://localhost/users/${userId}`, response => {
        if (response.success) {
            userData = response.message[0];
            if (userData) {
                document.getElementById("nameUserProfile").value = userData.name
                document.getElementById("lastNameUserProfile").value = userData.last_name
                document.getElementById("cpfUserProfile").value = userData.cpf
                document.getElementById("emailUserProfile").value = userData.email
                document.getElementById("birthUserProfile").value = userData.birth_date
            }
        }
    });
}

function disableForm() {

    if (document.getElementById("formProfile").disabled == true) {
        document.getElementById("formProfile").disabled = false;
    } else {
        document.getElementById("formProfile").disabled = true;
    }
}

function validatePassoword() {

    return checkFieldsById('newPassword', 'newPasswordCheck');

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
        updateUserName(userData.name);
        disableForm();
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
        email: document.getElementById("emailUserProfile").value
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
