var chart = am4core.create("chartdiv", am4charts.PieChart);

var series = chart.series.push(new am4charts.PieSeries());
series.dataFields.value = "expense";
series.dataFields.category = "category";

// Add data
chart.data = [{
  "category": "Еда",
  "expense": 501.9
}, {
  "category": "Хозяйственные расходы",
  "expense": 301.9
}, {
  "category": "Одежда и обувь",
  "expense": 201.1
}, {
  "category": "Регулярные платежи",
  "expense": 165.8
}, {
  "category": "Авто",
  "expense": 139.9
}, {
    "category": "Отдых",
  "expense": 139.9
}, {
    "category": "Вредные привычки",
  "expense": 139.9
}, {
    "category": "Крупные расходы",
  "expense": 139.9
}
];

chart.innerRadius = am4core.percent(40);

// And, for a good measure, let's add a legend
// chart.legend = new am4charts.Legend();



// google.charts.load("current", { packages: ["corechart"] });
// google.charts.setOnLoadCallback(drawChart);
// function drawChart() {
//   var data = google.visualization.arrayToDataTable([
//     ['Task', 'Hours per Day'],
//     ['Work', 11],
//     ['Eat', 2],
//     ['Commute', 2],
//     ['Watch TV', 2],
//     ['Sleep', 7]
//   ]);

//   var options = {
//     title: 'Затрачено на категории',
//     pieHole: 0.3,
//   };

//   var chart = new google.visualization.PieChart(document.querySelector('.chart-donut'));
//   chart.draw(data, options);
// };


// $('input[name="dates"]').daterangepicker({
//   autoApply: true,
//   period: 'week',
//   single: true,
//   anchorElement: $('input[name="dates"]')
//   // autoUpdateInput: true,
//   // showDropdowns: false
// });

$('input[name="dates').daterangepicker({
  "autoApply": true,
  "startDate": "11/30/2019",
  "endDate": "12/06/2019"
}, function (start, end, label) {
  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});


