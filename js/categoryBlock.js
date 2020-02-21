function showSubCategories(event, clickedButton) {
    event.stopPropagation();
    clickedButton.nextElementSibling.classList.add("show");
}

function updateCategoryInputValue(clickedCategoryButton) {
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
        let subMenuDropdown = checkedCategoryDropdown.querySelector('.dropdown-submenu');
        subMenuDropdown.classList.remove("show");
    } else {
        expenseCategoryInput.value = clickedCategoryButton.dataset.categoryId;
        expenseCategoryButton.textContent = checkedCategoryName;
    }
}