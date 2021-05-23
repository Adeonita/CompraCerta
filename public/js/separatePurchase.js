const check = document.getElementsByClassName("check-separate-purchase");
const amountElements = check.length;
const finishSeparate = document.getElementById("complete-separate-purchase");

for (let i = 0; i < amountElements; i++) {
    check[i].onclick = function() {
        const cont = document.querySelectorAll("input[name='check-separate-purchase']:checked").length;
        if (cont === amountElements) {
            finishSeparate.classList.remove("disabled");
        } else{
            finishSeparate.classList.add("disabled");

        }
    }
}