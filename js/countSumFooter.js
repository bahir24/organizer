var model = new ModelExpenses();
var table = document.querySelector('.table-expenses-body');
var expensesArray = table.querySelectorAll('tr');



function ModelExpenses(){
  name: "Makaka",
  function printVal() {
    for (key in this) {
      console.log(this[key]);
      console.log(this);
    }
  }
}

// var query = modeprintVal;




function ExpenseObj() {
    this.id;
    this.purchaseDate;
    this.categoryId;
    this.subcategoryId;
    this.price;
    this.description;
}


function tableToArray() {
  console.log(query);
  for (let arrIndex = 0; arrIndex < expensesArray.length; arrIndex++) {    
    
    var expense = new ExpenseObj();   
    
      for (key in expense) {
        let ind  = 0;
        expense[key] = expensesArray[ind];        
      }
    model["expense" + "-" +arrIndex] = expense;
     
  }
  
}
