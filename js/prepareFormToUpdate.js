function prepareFormToUpdate(clickedButton){
  let expenseSentButton = document.querySelector('.btn-form-expense');
  let updatedExpenseId = clickedButton.dataset.id;
  let expenseStringClassName = "." + "expense-row-" + updatedExpenseId;
  let expenseString = document.querySelector(expenseStringClassName);
  let expenseFields = expenseString.querySelectorAll('td, th');
  let formAddExpense = document.forms.formExpense;
  let menuButtons = formAddExpense.querySelectorAll('.btn-dropright-main');
  let submenuButtons = formAddExpense.querySelectorAll('.btn-dropright-submenu');
  let formFields = formAddExpense.querySelectorAll('input, textarea');
  expenseSentButton.textContent = 'Изменить';
  expenseSentButton.setAttribute('onclick', 'updateExpense();');
  formFields[0].value = updatedExpenseId;
  if(expenseFields[1].textContent !== ''){
    for(submenuButtonsIndex = 0; submenuButtonsIndex < submenuButtons.length; submenuButtonsIndex++){
      if(submenuButtons[submenuButtonsIndex].textContent == expenseFields[1].textContent){
        submenuButtons[submenuButtonsIndex].click();
      }
    }    
  } else {
    for(menuButtonsIndex = 0; menuButtonsIndex < menuButtons.length; menuButtonsIndex++){
      if(menuButtons[menuButtonsIndex].textContent == expenseFields[0].textContent){
        menuButtons[menuButtonsIndex].click();
      }
    }   
  }
  for(formFieldsIndex = 3; formFieldsIndex < formFields.length; formFieldsIndex++){
  formFields[formFieldsIndex].value = expenseFields[formFieldsIndex-1].textContent;
  }
}
