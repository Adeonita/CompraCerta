const creditCardCode = document.getElementById('credit-card-code');
const creditCardNumber = document.getElementById('credit-card-number');

creditCardCode.onkeypress = function() {
    if ( this.value.length < 2 || this.value.length > 2) {
        
        creditCardCode.style.borderColor = "red";
        creditCardCode.style.boxShadow = "inset 0 0, 0 0 10px red";
    } else {
        creditCardCode.style.border =  "1px solid #ced4da";
        creditCardCode.style.boxShadow = "none";
    }
}

creditCardNumber.onkeypress = function() {
    if ( this.value.length < 15 || this.value.length > 15) {
        
        creditCardNumber.style.borderColor = "red";
        creditCardNumber.style.boxShadow = "inset 0 0, 0 0 10px red";
    } else {
        creditCardNumber.style.border =  "1px solid #ced4da";
        creditCardNumber.style.boxShadow = "none";
    }
}