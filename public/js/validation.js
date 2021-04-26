function isInputNumber(evt){
                
    var ch = String.fromCharCode(evt.which);
    
    if(!(/[0-9]/.test(ch))){
        evt.preventDefault();
    }
    
}

function isInputText(evt){
                
    var ch = String.fromCharCode(evt.which);
    
    if(!(/[a-z]/.test(ch) || /[A-Z]/.test(ch))){
        evt.preventDefault();
    }

}