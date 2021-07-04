const a = document.getElementById('purchases-categories').getContext('2d');;

$.get("http://localhost/purchasesByCategories").done((items) => {
    let products = [];
    let amount = [];

    items.forEach(item => {
        products.push(item.name);
        amount.push(item.amount);
    });
    
    new Chart(a, {
        type: 'bar',
        data: {
            labels: products,
            datasets: [{
                label: "Categorias mais vendidas",
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