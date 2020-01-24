function sortButton(pushedBtn) {
  resetCheckedOnSelect();
  let ascInput = pushedBtn.children[1];
  let descInput = pushedBtn.children[2];
  let ascImg = pushedBtn.children[3];
  let descImg = pushedBtn.children[4];

  if (ascImg.classList.contains('sort-img-hidden')) {
    ascImg.classList.remove('sort-img-hidden');
    descImg.classList.add('sort-img-hidden');
    descInput.removeAttribute('checked');
    ascInput.setAttribute('checked', true);
    
  } else {
    descImg.classList.remove('sort-img-hidden');
    ascImg.classList.add('sort-img-hidden');   
    descInput.setAttribute('checked', true);
    ascInput.removeAttribute('checked');
  }
}

function resetCheckedOnSelect() {
  let sortInputs = document.querySelectorAll('input-sort');
  for (let sortInputsIndex = 0; sortInputsIndex < sortInputs.lendth; sortInputsIndex++) {
    sortInputs[sortInputsIndex].removeAttribute('checked');
  }
}