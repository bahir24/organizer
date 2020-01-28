function addButton(){
  // let formAddExpense = document.forms.addExpense;
  let formData = new FormData(document.forms.addExpense);
  let xhrAdd = new XMLHttpRequest();
  xhrAdd.open("POST", "Main/addExpense");
  // xhrAdd.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhrAdd.send(formData);
  xhrAdd.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector(".filter").submit();
    }
  }
  // console.log(formData);
}