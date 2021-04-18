const onlyNumber = document.querySelectorAll(".only-number");
const onlyLetter = document.querySelectorAll(".only-letter");

onlyNumber.forEach(input => {
    input.onkeypress = function(e) {
        const charCode = e.charCode;
        if (charCode < 48 || charCode > 57) {
            e.preventDefault();
        }
    }
});

onlyLetter.forEach(input => {
    input.onkeypress = function(e) {
        const charCode = e.charCode;
        if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
            e.preventDefault();
        }
    }
});

function checkFieldsById(field, fieldControl) {
    var fieldValue = document.getElementById(`${field}`);
    var fieldValueControl = document.getElementById(`${fieldControl}`);
    var isValid = fieldValue.value == fieldValueControl.value;
    if (!isValid) {
        fieldValue.classList.add("is-invalid");
        fieldValueControl.classList.add("is-invalid");
    } else {
        fieldValue.classList.remove("is-invalid");
        fieldValueControl.classList.remove("is-invalid");
    }
    return isValid;
}
