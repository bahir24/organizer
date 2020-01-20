const categoryButton = document.querySelector('.btn-group-category');
const subCategoryButton = document.querySelector('.btn-group-subcategory');


function changeHead(selectedLink) {
  categoryButton.children[0].textContent = selectedLink.textContent;
  categoryButton.children[2].value = selectedLink.dataset.id;
  subCategoryButton.children[0].removeAttribute('disabled');
  subCategoryButton.children[0].textContent = 'Подкатегория';
  subCategoryButton.children[2].value = '';
  let subCategoryLinks = (subCategoryButton.children[1].querySelectorAll('a'));
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
  subCategoryButton.children[0].textContent = selectedSublink.textContent;
  subCategoryButton.children[2].value = selectedSublink.dataset.id;
}