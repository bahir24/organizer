function addExpense(){
  let formData = new FormData(document.forms.formExpense);  
  let xhrAdd = new XMLHttpRequest();
  xhrAdd.open("POST", "Main/addExpense");
  xhrAdd.send(formData);
  xhrAdd.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector(".filter").submit();
    }
  }
}