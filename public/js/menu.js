const menu = document.getElementById("menu");

$.get("http://localhost/categories", function(data) {
    data.forEach(element => {
        const item = document.createElement("a");
        item.setAttribute("href", "#");
        item.classList.add(...["swiper-item", "department", "px-3", "py-2"]);
        item.innerHTML = element;
        menu.appendChild(item);        
    }); 
});