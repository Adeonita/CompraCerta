function validateRegister() {

    let isValid = true;
    let isPasswordsValid = checkFieldsById('passwordUserRegister', 'passwordControlUserRegister');
    let isEmailsValid = checkFieldsById('emailUserRegister', 'emailControlUserRegister');

    if (!(isPasswordsValid && isEmailsValid)) {
        isValid = false;
    }

    return isValid;
}
