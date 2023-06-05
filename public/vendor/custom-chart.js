
var xValues = ["Memilih", "Tidak Memilih", "Ragu Ragu"];
var yValues = [1155, 549, 244,];
var barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797"
];

new Chart("myChart", {
    type: "doughnut",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            data: yValues
        }]
    },
    // options: {
    //     title: {
    //         display: true,
    //         text: "World Wide Wine Production 2018"
    //     }
    // }
});


var xValues = ["Pengeluaran", "Pemasukan"];
var yValues = [1155, 244,];
var barColors = [
    "#ada6f2",
    "#321fdb",
];

new Chart("Budget", {
    type: "doughnut",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: ['#ada6f2', '#321fdb',],
            data: yValues
        }]
    },
    // options: {
    //     title: {
    //         display: true,
    //         text: "World Wide Wine Production 2018"
    //     }
    // }
});


const barChart = new Chart(document.getElementById('buget2'), {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember',],
        datasets: [{
            label: 'Pengeluaran',
            backgroundColor: '#ada6f2',
            borderColor: 'rgba(220, 220, 220, 0.8)',
            highlightFill: 'rgba(220, 220, 220, 0.75)',
            highlightStroke: 'rgba(220, 220, 220, 1)',
            data: [299, 300, 100, 400, 500, 10, 200, 100, 400, 500, 10, 200]
        }, {
            label: 'Pemasukan',
            backgroundColor: '#321fdb',
            borderColor: 'rgba(151, 187, 205, 0.8)',
            highlightFill: 'rgba(151, 187, 205, 0.75)',
            highlightStroke: 'rgba(151, 187, 205, 1)',
            data: [500, 100, 100, 500, 200, 500, 500, 100, 500, 200, 500, 500]
        }]
    },
    options: {
        responsive: true
    }
});

