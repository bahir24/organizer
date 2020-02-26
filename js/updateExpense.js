function updateExpense(){
  let formUpdateData = new FormData(document.forms.formExpense);
  let xhrUpdate = new XMLHttpRequest();
  xhrUpdate.open("POST", "Main/updateExpense");
  xhrUpdate.send(formUpdateData);
  xhrUpdate.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector(".filter").submit();
    }
  }
}