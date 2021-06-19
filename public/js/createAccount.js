function validateRegister() {

    let isPasswordsValid = checkFieldsById('passwordUserRegister', 'passwordControlUserRegister');
    let isEmailsValid = checkFieldsById('emailUserRegister', 'emailControlUserRegister');

    if (!(isPasswordsValid && isEmailsValid)) {
        alert('Emails não conferem');
        return false;
    }
    return true;
}

async function postForm() {
    clientData = {
        name: document.getElementById("nameUserRegister").value,
        last_name: document.getElementById("lastNameUserRegister").value,
        cpf: document.getElementById("cpfUserRegister").value,
        email: document.getElementById("emailUserRegister").value,
        password: document.getElementById("passwordUserRegister").value,
        birth_date: document.getElementById("birthUserRegister").value,
    };

    let res = await createClient(clientData);

    return res;

}

function validatePassoword(){

    let isPasswordsEqual = checkFieldsById('newPassword', 'newPasswordCheck');
    return isPasswordsEqual;
}

function createClient(data) {
    let response = $.post("http://localhost/client/create",
        data).done((response) => {
        if (response.status == 400) {
            alert('Erro ao criar usuário, email já existe');
        } else {
            alert("Usuário criado com sucesso!");
            return false;
        }
    });
    return response;
}

$('#formRegister').on('submit', function(e) {
    if (validateRegister()) {
        postForm();
        return true;
    } else {
        e.preventDefault();
    }
});
