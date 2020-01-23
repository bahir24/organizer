<?php

class mainController extends Controller
{
    public $sectionSpecify = "filter";
  
  
    public function indexAction($arrFilterQuery)
    {      
      
      
      if(empty($arrFilterQuery)) {
      $this->arrExpense = $this->store->getAll();
      } else {
      $this->arrFilter = new QueryParams($arrFilterQuery);
      $this->viewBuild->arrFilter = $this->arrFilter;
      $this->arrExpense = $this->store->getByFilter($this->arrFilter->sql);
      $this->sectionSpecify = 'filterfill';
      }
      $this->viewBuild->sectionFeatures = $this->sectionSpecify;
      $this->viewBuild->arrExpense = $this->arrExpense;
      $this->viewBuild->pageRender();
    }        

    public function deleteAction()
    {
      $exEntity = new ExpenseEntity;
      $exEntity->postStrToObject($_POST);
      $this->store->delete($exEntity->id);
      if(empty($this->arrFilter)) {
echo "here";
      } else {
header("Location: http://organizer.com/");

      }
      

    }
    
    public function addExpenseAction() {
    $exEntity = new ExpenseEntity;
    $exEntity->postStrToObject($_POST);
    $this->store->add($exEntity);
    header("Location: http://organizer.com/");
    }

    public function updateExpenseAction() {
      $exEntity = new ExpenseEntity;
      $exEntity->postStrToObject($_POST);
      $this->store->update($exEntity);

      header("Location: http://organizer.com/");
    }

}
