<?php

class mainController extends Controller
{
    public $sectionSpecify = "filter";
  
  
    public function indexAction($arrFilterQuery)
    {      
      $this->viewBuild->sectionFeatures = $this->sectionSpecify;
      $this->arrFilter = new QueryParams($arrFilterQuery);
      // echo "<pre>";
      //   print_r($this->arrFilter);
      //   echo "</pre>";


      if(empty($arrFilterQuery)) {
      $this->arrExpense = $this->store->getAll();
      } else {
      $this->viewBuild->arrFilter = $this->arrFilter;  
      $this->arrExpense = $this->store->getByFilter($this->arrFilter->sql); 
      }
      
      $this->viewBuild->arrExpense = $this->arrExpense;
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
