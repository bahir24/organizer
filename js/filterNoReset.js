function filterNoReset (delButton) {  
  let delVarInput = document.querySelector('.delButtonId');
  delVarInput.value = delButton.dataset.delBtnId;
  console.log(delVarInput);
}