
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
            backgroundColor: barColors,
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