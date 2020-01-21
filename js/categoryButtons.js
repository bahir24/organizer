//TODO convert to var categoryButton

function changeHead(selectedLink) {
  let currentElement = selectedLink.closest('.form-group');
  let slaveElement = currentElement.nextElementSibling;
  let categoryButton = currentElement.querySelector('.btn-group-category');
  let subCategoryButton = slaveElement.querySelector('.btn-group-subcategory');
  categoryButton.children[0].textContent = selectedLink.textContent;
  categoryButton.children[2].value = selectedLink.dataset.id;
  subCategoryButton.children[0].removeAttribute('disabled');
  subCategoryButton.children[0].textContent = 'Подкатегория';
  subCategoryButton.children[2].value = '';
  let subCategoryLinks = (subCategoryButton.children[1].querySelectorAll('button'));
  for (subCategoryLinksIndex = 0; subCategoryLinksIndex < subCategoryLinks.length; subCategoryLinksIndex++) {
    subcategoryLink = subCategoryLinks[subCategoryLinksIndex];
    subcategoryLink.style.display = 'none'
    subcategoryLink.nextElementSibling.style.display='none';
    if (subcategoryLink.dataset.categoryId === selectedLink.dataset.id) {
      subcategoryLink.style.display = 'block';
      subcategoryLink.nextElementSibling.style.display = 'block';
    }
  };
}

function changeHeadSub(selectedSublink) {
  let subCategoryButton = selectedSublink.closest('.btn-group-subcategory');
  subCategoryButton.children[0].textContent = selectedSublink.textContent;
  subCategoryButton.children[2].value = selectedSublink.dataset.id;
}