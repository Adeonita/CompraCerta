const onlyNuber = document.querySelectorAll(".only-number");
const onlyLetter = document.querySelectorAll(".only-letter");

onlyNuber.forEach(input => {
    input.onkeypress = function (e) {
        const charCode = e.charCode;
        if( charCode < 48 || charCode > 57) {
            e.preventDefault();
        }
    }
});

onlyLetter.forEach(input => {
    input.onkeypress = function (e) {
        const charCode = e.charCode;
        if( (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) ) {
            e.preventDefault();
        }
    }
});

