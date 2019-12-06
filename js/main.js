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