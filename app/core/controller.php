<?php
  class Controller {
    public $store;
    public $arrExpense;
    public $arrFilter;
    public $viewBuild;
    public $db = "db/organizer.db";
    public $pageTemplate = "layout";
    public $arrCategories = array();
    public $arrSubcategories = array();
      function __construct() {
        $this->viewBuild = new View;
        $this->store = new ExpensesStore($this->db);
        $categoryStore = new CategoryStore;
        $this->arrCategories = $categoryStore->getAll();
        $subCategoryStore = new SubcategoryStore;
        $this->arrSubcategories = $subCategoryStore->getAll();
      }
  }