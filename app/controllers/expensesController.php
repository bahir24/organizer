<?php

class expensesController extends controller {
  
  public function __construct() {
    //  parent::__construct();
    $this->store = new ExpensesStore($this->db);
    $this->view = new View();
  }
  public function getAction() {
    
    $rezult = $this->store->getAll();
    $pageTemplate = "layout";
    $sectionSpecify = "filter";
    $table = "table";
    $this->view->halfPageShow($pageTemplate, $sectionSpecify, $table, $rezult);
    
  }
  
}