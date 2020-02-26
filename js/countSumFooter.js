var countWeekStart = new Date;
var countMonthStart = new Date;
var countYearStart = new Date;

countWeekStart.setDate(countWeekStart.getDate() - countWeekStart.getDay() + 1);
countMonthStart.setDate(countMonthStart.getDate() - countMonthStart.getDate() + 1);
countYearStart.setDate(countYearStart.getMonth() - countYearStart.getMonth());
countYearStart.setDate(countYearStart.getDate() - countYearStart.getDate() + 1);


var weekStart = countWeekStart.setHours(0, 0, 0, 0);
var monthStart = countMonthStart.setHours(0, 0, 0, 0);
var yearStart = countYearStart.setHours(0, 0, 0, 0);

var formatWeekStart = new Date(weekStart);
var formatMonthStart = new Date(monthStart);
var formatYearStart = new Date(yearStart);
const footerDataFields = document.querySelectorAll('.footer-field-data');
const tableRows = document.querySelectorAll('tr');

var footerSum = {
    sumWeek: 0,
    sumMonth: 0,
    sumYear: 0
};


function countByPeriods() {
    
    for (var tableRowsIndex = 1; tableRowsIndex < tableRows.length; tableRowsIndex++) {
        let tableRow = tableRows[tableRowsIndex];
        let tableRowDate = tableRow.children[2].textContent;
        var rowExpenseSum = tableRow.children[3].textContent;
        var formatTableRowDate = new Date(tableRowDate);
        switch (true) {
            case formatTableRowDate > formatWeekStart:
                footerSum.sumWeek += Number(rowExpenseSum);
            case formatTableRowDate > formatMonthStart:
                footerSum.sumMonth += Number(rowExpenseSum);
            case formatTableRowDate > formatYearStart:
                footerSum.sumYear += Number(rowExpenseSum);                        
        }
        
    }
}

countByPeriods();

footerDataFields[0].textContent = footerSum.sumYear;
footerDataFields[1].textContent = footerSum.sumMonth;
footerDataFields[2].textContent = footerSum.sumWeek;