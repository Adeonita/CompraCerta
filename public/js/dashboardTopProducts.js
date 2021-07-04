const ctx = document.getElementById('top-products').getContext('2d');;

$.get("http://localhost/topProducts").done((items) => {
    let products = [];
    let amount = [];

    items.forEach(item => {
        products.push(item.name);
        amount.push(item.amount);
    });
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: products,
            datasets: [{
                label: "Produtos mais vendidos",
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                  ],              
                data: amount,
                borderColor: 'rgb(75, 192, 192)',
                fill: false,
                tension: 0.1
            }]
        }
    });
});