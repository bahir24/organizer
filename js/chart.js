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