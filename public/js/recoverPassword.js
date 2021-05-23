function validateRecover() {
    let isValidEmail = checkFieldsById('emailUserRecover', 'emailUserRecoverControl');
    let alertEmail = '';
    if (isValidEmail) {
        alertEmail = `Foi enviado um email para ${document.getElementById('emailUserRecover').value} com instruções para a recuperação da senha`;
    } else {
        alertEmail = 'Emails não conferem';
    }
    alert(alertEmail);
    return isValidEmail;
}