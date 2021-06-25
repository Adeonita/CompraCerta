const state = document.getElementById("StateList");  


$.get("http://localhost/states", function(data) {
    data.forEach(element => {
        const item = document.createElement("a");
        item.innerHTML = element.name;
        state.appendChild(item);  
    }); 
});
