function validateRegister() {

    let isPasswordsValid = checkFieldsById('passwordUserRegister', 'passwordControlUserRegister');
    let isEmailsValid = checkFieldsById('emailUserRegister', 'emailControlUserRegister');
    let isValidDate = checkDate("birthUserRegister");


    if (!(isPasswordsValid && isEmailsValid && isValidDate)) {
        alert('Revise os campos');
        return false;
    }
    return true;
}

function checkDate(date_id) {
    let date = document.getElementById(date_id);
    let today = new Date().toISOString().split('T')[0];;
    console.log(today, date.value);
    if (date.value >= today) {
        date.classList.add("is-invalid");
        return false;
    } else {
        date.classList.remove("is-invalid");
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

function validatePassoword() {

    let isPasswordsEqual = checkFieldsById('newPassword', 'newPasswordCheck');
    return isPasswordsEqual;
}

function createClient(data) {
    let response = $.post("http://localhost/users/",
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