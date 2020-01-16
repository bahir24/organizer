<?php
  class Controller {
    public $store;
    public $arrExpense;
    public $arrFilter;
    public $viewBuild;
    public $db = 'db/test.db';
    public $pageTemplate = "layout";
    public $arrCategories = array();
    public $arrSubCategories = array();
      function __construct() {
        $this->viewBuild = new View;
        $this->store = new ExpensesStore($this->db);
      }
  }