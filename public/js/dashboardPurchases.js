var ctx = document.getElementById('chart-purchase').getContext('2d');;

var monthsLabels = [
    'jan', 'fev', 'mar', 'abr', 'maio', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'
];

var PurchaseChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: monthsLabels,
        datasets: [{
            label: "Total de Vendas 2021",
            data: [12, 19, 3, 5, 2, 3, 12, 14, 15, 12, 10, 9],
            borderColor: 'rgb(75, 192, 192)',
            fill: false,
            tension: 0.1
        }]
    }
});


function checkYear() {
    var searchYear = document.getElementById('yearSearchPurchase').value;
    var actualYear = new Date().getFullYear();
    console.log(searchYear, actualYear);
    if (searchYear > actualYear) {
        alert('Ano maior que o atual');
        return false;
    }
    return true;
}