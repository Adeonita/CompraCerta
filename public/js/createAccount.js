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
    var pw1 = document.getElementById("newPass");  
    var pw2 = document.getElementById("newPassR");
    
    if(pw1.value != pw2.value) {
        pw2.setCustomValidity("Senhas diferentes!");
      } else {
        pw2.setCustomValidity('');
      }
}