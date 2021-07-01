$(document).ready(() => {
    if (getLocalUserDepartment() === null) {

        $.get("http://localhost/categories", function(data) {
            data.forEach(element => {
                const item = document.createElement("a");
                item.setAttribute("href", `http://localhost/products/${element.id}`);
                item.classList.add(...["swiper-item", "department", "px-3", "py-2"]);
                item.innerHTML = element.name;
                menu.appendChild(item);
            });
        });

    } else {
        $.get("http://localhost/departments", function(data) {
            data.forEach(element => {
                if (element.id === 1) {
                    const item = document.createElement("a");
                    item.setAttribute("href", `http://localhost/department/Adminstracao`);
                    item.classList.add(...["swiper-item", "department", "px-3", "py-2"]);
                    item.innerHTML = element.name;
                    menu.appendChild(item);
                }else {
                    const item = document.createElement("a");
                    item.setAttribute("href", `http://localhost/department/${element.id}`);
                    item.classList.add(...["swiper-item", "department", "px-3", "py-2"]);
                    item.innerHTML = element.name;
                    menu.appendChild(item);
                }
            });
        });
    }
});

const menu = document.getElementById("menu");
