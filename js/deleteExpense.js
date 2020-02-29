function deleteExpense(selectedButton) {
  expenseId = selectedButton.dataset.delBtnId;
  let dataDeleteExpenseId = "deleteExpenseId=" + expenseId;
  let xhrDelete = new XMLHttpRequest();
  xhrDelete.open("POST", "Main/deleteExpense");
  console.log('here');
  xhrDelete.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhrDelete.send(dataDeleteExpenseId);
  xhrDelete.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector(".filter").submit();
    }
  }
}