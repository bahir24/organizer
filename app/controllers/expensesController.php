<?php

class expensesController extends Controller {
  
  public function __construct() {
    //  parent::__construct();
    $this->store = new ExpensesStore($this->db);
    $this->view = new View();
  }
  public function indexAction() {
    
    $rezult = $this->store->getAll();
    $pageTemplate = "layout";
    $sectionSpecify = "filter";
    $table = "table";
    $this->view->halfPageShow($pageTemplate, $sectionSpecify, $table, $rezult);
    
  }

  public function editAction() {
    echo "EDIT!";
    print_r($_POST);
  }

  public function deleteAction() {
    echo "DELETE!";
    echo "<br>";
    print_r($_POST);
    echo "<br>";
    echo "вызвать основное действие";
  }
  
}