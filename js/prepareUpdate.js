const modalUpdate = document.querySelector('#updateExpense');
const formUpdate = modalUpdate.querySelector('form');
const formInputs = formUpdate.querySelectorAll('input, textarea');

function prepareUpdate(clickedButton){
  let expenseId = clickedButton.dataset.id;
  let expenseClassName = "." + "expense-row-" + expenseId;
  let expenseRow = document.querySelector(expenseClassName);
  let expenseFields = expenseRow.querySelectorAll('td, th');
  formInputs[0].value = expenseFields[1].dataset.categoryId;
  formInputs[0].previousElementSibling.previousElementSibling.textContent = expenseFields[1].textContent;
  formInputs[1].value = expenseFields[2].dataset.subcategoryId;
  formInputs[1].previousElementSibling.previousElementSibling.textContent = expenseFields[2].textContent;
  formInputs[2].value = expenseFields[0].textContent;
  formInputs[2].textContent = expenseFields[0].textContent;
  formInputs[3].value = expenseFields[3].textContent;
  formInputs[4].value = expenseFields[4].textContent;
  formInputs[5].value = expenseId;
  sortSubcategories(formInputs[0].previousElementSibling.querySelector('button'));
}
