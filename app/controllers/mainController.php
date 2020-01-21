<?php

class mainController extends Controller
{
    public $sectionSpecify = "filter";
  
  
    public function indexAction($arrFilterQuery)
    {      
      $this->viewBuild->sectionFeatures = $this->sectionSpecify;
      if(empty($arrFilterQuery)) {
        $this->arrExpense = $this->store->getAll();
        $this->viewBuild->arrExpense = $this->arrExpense;
      } else {        
        $this->arrFilter = new QueryParams($arrFilterQuery);        
        $this->arrExpense = $this->store->getByFilter($this->arrFilter->sql);        
      }
      $this->viewBuild->pageRender();
    }    

    public function editAction()
    {
        echo "EDIT!";
        print_r($_POST);
    }

    public function deleteAction()
    {
        echo "DELETE!";
        echo "<br>";
        print_r($_POST);
        echo "<br>";
        echo "вызвать основное действие";
    }
}
