function showSubCategories(event, clickedButton) {
    event.stopPropagation();    
    let subMenuDropdowns = document.querySelectorAll('.dropdown-submenu');
    for(subMenuDropdownsIndex = 0; subMenuDropdownsIndex < subMenuDropdowns.length; subMenuDropdownsIndex++){
        subMenuDropdowns[subMenuDropdownsIndex].classList.remove("show");
    }
    clickedButton.nextElementSibling.classList.add("show");
}

function selectCategory(clickedCategoryButton) {
    let expenseCategoryBlock = clickedCategoryButton.closest('.expense-category-input');
    expenseCategoryButton = expenseCategoryBlock.querySelector('.category-dropdown-btn');
    expenseCategoryInput = expenseCategoryBlock.querySelector('.category-id-input');
    expenseSubcategoryInput = expenseCategoryBlock.querySelector('.subcategory-id-input');
    checkedCategoryDropdown = clickedCategoryButton.closest('.btn-category');
    checkedCategoryName = checkedCategoryDropdown.querySelector('.btn-dropright-main').textContent;
        
    if (clickedCategoryButton.dataset.subcategoryId) {
        expenseCategoryInput.value = clickedCategoryButton.dataset.categoryId;
        expenseSubcategoryInput.value = clickedCategoryButton.dataset.subcategoryId;
        expenseCategoryButton.textContent = checkedCategoryName + ` \u21D2 ` + clickedCategoryButton.textContent;
        
    } else {
        expenseSubcategoryInput.value = '';
        expenseCategoryInput.value = clickedCategoryButton.dataset.categoryId;
        expenseCategoryButton.textContent = checkedCategoryName;
    } 
}