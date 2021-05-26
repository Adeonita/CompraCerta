function validateRegister() {

    let isValid = true;
    let isPasswordsValid = checkFieldsById('passwordUserRegister', 'passwordControlUserRegister');
    let isEmailsValid = checkFieldsById('emailUserRegister', 'emailControlUserRegister');

    if (!(isPasswordsValid && isEmailsValid)) {
        isValid = false;
    }

    return isValid;
}

function validatePassoword(){

    let isPasswordsEqual = checkFieldsById('newPassword', 'newPasswordCheck');
    return isPasswordsEqual;
}