var xValues = ["Dukungan Belum Terkumpul", "Dukungan Terkumpul"];
var yValues = [1155, 244,];
var barColors = [
    "#ada6f2",
    "#321fdb",
];

new Chart("Pendukung", {
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
    //         text: "Target 8.000 dukungan"
    //     }
    // }
});

new Chart(document.getElementById('UsiaPe'), {
    type: 'bar',
    data: {
        labels: ['Pria 17-25', 'Pria 26-35', 'Pria 36-45', 'Pria 46-55', 'Pria 55-65', 'Pria Lanjut Usia', 'Wanita 17-25', 'Wanita  26-35', 'Wanita  36-45', 'Wanita 46-55', 'Wanita 55-65', 'Wanita Lanjut Usia'],
        datasets: [{
            label: 'Topografi Usia',
            backgroundColor: '#ada6f2',
            borderColor: 'rgba(220, 220, 220, 0.8)',
            highlightFill: 'rgba(220, 220, 220, 0.75)',
            highlightStroke: 'rgba(220, 220, 220, 1)',
            data: [299, 300, 100, 400, 500, 10, 56, 44, 21, 54]
        },
        ]
    },
    options: {
        responsive: true
    }
});

new Chart(document.getElementById('ganda'), {
    type: 'bar',
    data: {
        labels: ['Kliwon', 'ANtok', 'Gandi', 'Rizal', 'Wawan', 'ROhim', 'Iqbal', 'Santoso', 'Susanto'],
        datasets: [{
            label: 'Pembawa Data Ganda',
            backgroundColor: '#321fdb',
            borderColor: 'rgba(220, 220, 220, 0.8)',
            highlightFill: 'rgba(220, 220, 220, 0.75)',
            highlightStroke: 'rgba(220, 220, 220, 1)',
            data: [30, 300, 12, 75, 50, 10, 42, 55, 200]
        },
        ]
    },
    options: {
        responsive: true
    }
});

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


new Chart(document.getElementById('buget2'), {
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


