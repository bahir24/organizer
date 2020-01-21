<?php



class mainController extends Controller
{
    public $sectionSpecify = "filter";
  
  
    public function indexAction($arrFilterQuery)
    {
      
      $this->viewBuild->sectionFeatures = $this->sectionSpecify;

      if(empty($arrFilterQuery)) {
        $this->arrExpense = $this->store->getAll();
        // echo "<pre>";
        // print_r(get_object_vars($this));
        // echo "</pre>";
        $this->viewBuild->pageRender(        
        $this->sectionSpecify,         
        $this->arrExpense, 
        $this->arrCategories, 
        $this->arrSubcategories);
      } else {
        $this->viewBuild->sectionFeatures = $this->sectionSpecify;
        $this->arrFilter = new QueryParams($arrFilterQuery);        
        $this->arrExpense = $this->store->getByFilter($this->arrFilter->sql);
        $this->viewBuild->pageRender(get_object_vars($this->viewBuild));
      }
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
