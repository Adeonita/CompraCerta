function validateRecover() {
    let isValidEmail = checkFieldsById('emailUserRecover', 'emailUserRecoverControl');
    let alertEmail = '';
    if (isValidEmail) {
        alertEmail = `Um Email foi enviado ao seu ${document.getElementById('emailUserRecover').value} com instruções para a recuperação da senha`;
    } else {
        alertEmail = 'Emails não conferem';
    }
    alert(alertEmail);
    return isValidEmail;
}
