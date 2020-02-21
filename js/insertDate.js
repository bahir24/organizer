var addExpenseForm = document.forms.addExpense;
var dateInput = addExpenseForm.purchaseDate;

function insertDate(){
    let currentDate = new Date();
    let currentYear = currentDate.getFullYear();
    let currentMonth = currentDate.getMonth() < 10 ? '0' + currentDate.getMonth() : currentDate.getMonth();
    let currentDay = currentDate.getDate() < 10 ? '0' + currentDate.getDate() : currentDate.getDate();
    let currentDateFormatted = currentYear + '-' + currentMonth + '-' + currentDay;
    dateInput.value = currentDateFormatted;
}