<?php

class mainController extends Controller
{
    public $sectionSpecify = "filter";
  
  
    public function indexAction($arrFilterQuery)
    {      
      
      $this->arrFilter = new QueryParams($arrFilterQuery);
      if(empty($arrFilterQuery)) {
      $this->arrExpense = $this->store->getAll();
      } else {
      $this->viewBuild->arrFilter = $this->arrFilter;
      $this->arrExpense = $this->store->getByFilter($this->arrFilter->sql);
      $this->sectionSpecify = 'filterfill';
      }
      $this->viewBuild->sectionFeatures = $this->sectionSpecify;
      $this->viewBuild->arrExpense = $this->arrExpense;
      $this->viewBuild->pageRender();
    }    

    public function editAction()
    {
        echo "EDIT!";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

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
