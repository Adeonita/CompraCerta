const creditCardCode = document.getElementById('credit-card-code');
const creditCardNumber = document.getElementById('credit-card-number');

creditCardCode.onkeypress = function(e) {
    if ( this.value.length < 2 || this.value.length > 2) {
        console.log({ lenght: this.value.length, m: "Invalido"})
        
        creditCardCode.style.borderColor = "red";
        creditCardCode.style.boxShadow = "inset 0 0, 0 0 10px red";
    } else {
        console.log({ lenght: this.value.length, m: "valido"})
        creditCardCode.style.border =  "1px solid #ced4da";
        creditCardCode.style.boxShadow = "none";

    }
}

creditCardNumber.onkeypress = function(e) {
    if ( this.value.length < 15 || this.value.length > 15) {
        console.log({ lenght: this.value.length, m: "Invalido"})
        
        creditCardNumber.style.borderColor = "red";
        creditCardNumber.style.boxShadow = "inset 0 0, 0 0 10px red";
    } else {
        console.log({ lenght: this.value.length, m: "valido"})
        creditCardNumber.style.border =  "1px solid #ced4da";
        creditCardNumber.style.boxShadow = "none";

    }
}