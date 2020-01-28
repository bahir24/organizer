const sortButtons = document.querySelector('.table-expenses-head').querySelectorAll('button');

function sortButton(pushedBtn) {
  resetCheckedOnSelect(pushedBtn);

  let ascImg = pushedBtn.querySelector('.img-sort-asc');
  let descImg = pushedBtn.querySelector('.img-sort-desc');
  let filterForm = document.forms.filter;
  let orderFieldData = pushedBtn.dataset.orderField;
  
  if (ascImg.classList.contains('sort-img-hidden')) {
    ascImg.classList.remove('sort-img-hidden');
    descImg.classList.add('sort-img-hidden');
    filterForm.elements.order.value = 'ASC';
    filterForm.elements.orderField.value = orderFieldData;       
    filterForm.submit();
    
  } else {
    descImg.classList.remove('sort-img-hidden');
    ascImg.classList.add('sort-img-hidden');
    filterForm.elements.order.value = 'DESC';
    filterForm.elements.orderField.value = orderFieldData;
    filterForm.submit();
  }

}

function resetCheckedOnSelect(pushedBtn) {
  
  for (let sortButtonIndex = 0; sortButtonIndex < sortButtons.length; sortButtonIndex++){
    var sortButton = sortButtons[sortButtonIndex];
    if (sortButton !== pushedBtn){
    sortButton.querySelector('.img-sort-asc').classList.add('sort-img-hidden');
    sortButton.querySelector('.img-sort-desc').classList.remove('sort-img-hidden');
    }
  }
    
   
    
  
}