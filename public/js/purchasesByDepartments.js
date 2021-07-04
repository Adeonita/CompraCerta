const placeholder = document.getElementById('purchases-departments').getContext('2d');;

$.get("http://localhost/purchasesByDepartments").done((items) => {
    let products = [];
    let amount = [];

    items.forEach(item => {
        products.push(item.status);
        amount.push(item.total);
    });
    
    new Chart(placeholder, {
        type: 'bar',
        data: {
            labels: products,
            datasets: [{
                label: "Itens por setor",
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                ],              
                data: amount,
                fill: false,
                tension: 0.1
            }]
        }
    });
});