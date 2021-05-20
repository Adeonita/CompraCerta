async function validateRegister(formData) {

    let isValid = true;
    let isPasswordsValid = checkFieldsById('passwordUserRegister', 'passwordControlUserRegister');
    let isEmailsValid = checkFieldsById('emailUserRegister', 'emailControlUserRegister');

    if (!(isPasswordsValid && isEmailsValid)) {
        return false;
    }

    clientData = {
        name: document.getElementById("nameUserRegister").value,
        last_name: document.getElementById("lastNameUserRegister").value,
        cpf: document.getElementById("cpfUserRegister").value,
        email: document.getElementById("emailUserRegister").value,
        password: document.getElementById("passwordUserRegister").value,
        birth_date: document.getElementById("birthUserRegister").value,
    };

    res = await createClient(clientData);

    alert(res);
    // if (res) {
    //     document.getElementById("formRegister").reset();
    // }

    return false;
}

function createClient(data) {
    let response = $.post("http://localhost/client/create",
        data,
        (data, status, xhr) => {
            if (status == 'success') {
                alert('Usuário criado com sucesso!');
                return data;
            }
        });
    return response;
}