var app = {
    deleteExpense: function deleteExpenseFoo(selectedButton) {
        expenseId = selectedButton.dataset.delBtnId;
        let dataDeleteExpenseId = "deleteExpenseId=" + expenseId;
        let xhrDelete = new XMLHttpRequest();
        xhrDelete.open("POST", "Main/delete");
        xhrDelete.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhrDelete.send(dataDeleteExpenseId);
        xhrDelete.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".filter").submit();
            }
        }
    },

    showSubCategories: function showSubCategoriesFoo(event, clickedButton) {
        event.stopPropagation();
        let subMenuDropdowns = document.querySelectorAll('.dropdown-submenu');
        for (subMenuDropdownsIndex = 0; subMenuDropdownsIndex < subMenuDropdowns.length; subMenuDropdownsIndex++) {
            subMenuDropdowns[subMenuDropdownsIndex].classList.remove("show");
        }
        clickedButton.nextElementSibling.classList.add("show");
    },

    selectCategory: function selectCategoryFoo(clickedCategoryButton) {
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
}