function sortButton(pushedBtn) {
  console.log("etto");
  let sortButton = pushedBtn;
  let ascImg = sortButton.querySelector('.img-sort-asc');
  let descImg = sortButton.querySelector('.img-sort-desc');
  let ascInput = sortButton.querySelector('#ascDate');
  let descInput = sortButton.querySelector('#descDate');
  console.log(ascInput);
  console.log(descInput);

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