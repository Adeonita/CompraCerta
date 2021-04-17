const creditCardCode = document.getElementById('credit-card-code');
const creditCardNumber = document.getElementById('credit-card-number');

creditCardCode.onkeypress = function() {
    if ( this.value.length !== 2 ) {
        creditCardCode.classList.add("is-invalid");
    } else {
        creditCardCode.classList.remove("is-invalid");
    }
}

creditCardNumber.onkeypress = function() {
    if ( this.value.length !== 15 ) {
        creditCardNumber.classList.add("is-invalid");
    } else {
        creditCardNumber.classList.remove("is-invalid");
    }
}