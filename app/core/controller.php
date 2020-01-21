<?php
  class Controller {
    public $store;
    public $arrExpense = Expense::class;
    public $arrFilter = QueryParams::class;
    public $viewBuild = View::class;
    public $db = "db/organizer.db";
    public $pageTemplate = 'layout';
    public $arrCategories = array();
    public $arrSubcategories = array();

      function __construct() {        
        $categoryStore = new CategoryStore;
        $subCategoryStore = new SubcategoryStore;
        $this->arrCategories = $categoryStore->getAll();        
        $this->arrSubcategories = $subCategoryStore->getAll();
        $this->viewBuild = new View;  
        $this->viewBuild->pageLayout = $this->pageTemplate;
        $this->store = new ExpensesStore($this->db);      
      }
  }