function prepareFormToAdd(){
    let addExpenseForm = document.forms.formExpense;
    expenseSentButton = document.querySelector('.btn-form-expense');
    expenseSentButton.textContent = 'Добавить';
    expenseSentButton.setAttribute('onclick', 'addExpense();');
    formFields = addExpenseForm.querySelectorAll('input, textarea');
    for(formFieldsIndex = 0; formFieldsIndex < formFields.length; formFieldsIndex++)
    formFields[formFieldsIndex].value = '';
    let categoryBlock = addExpenseForm.querySelector('.category-dropdown-btn');
    categoryBlock.textContent = 'Выберите категорию';
    let dateInput = addExpenseForm.purchaseDate;
    currentDate = new Date();
    currentYear = currentDate.getFullYear();
    currentMonth = Number(currentDate.getMonth())+1; 
    currentMonthFormatted = currentMonth < 10 ? '0' + currentMonth : currentMonth;
    currentDay = currentDate.getDate() < 10 ? '0' + currentDate.getDate() : currentDate.getDate();   
    currentDateFormatted = currentYear + '-' + currentMonthFormatted + '-' + currentDay;
    dateInput.value = currentDateFormatted;
}