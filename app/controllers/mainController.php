<?php



class mainController extends Controller
{
    public $dataTable = "table";
    public $sectionSpecify = "filter";
  
  
    public function indexAction($arrFilterQuery)
    {
      // print_r($arrFilterQuery);
      if(empty($arrFilterQuery)) {
        $arrExpenses = $this->store->getAll();

        $this->viewBuild->pageRender($this->pageTemplate, $this->sectionSpecify, $this->dataTable, $arrExpenses, $this->arrCategories, $this->arrSubcategories);
      } else {
        $queryparams = new QueryParams($arrFilterQuery);
        $arrExpenses = $this->store->getByFilter($queryparams->sql);
        $this->viewBuild->pageRender($this->pageTemplate, $this->sectionSpecify, $this->dataTable, $arrExpenses, $this->arrCategories, $this->arrSubcategories);
      }
    }

    // public function filterAction()
    // {
    //     $queryparams = new QueryParams($_POST);
    //     $arrExpenses = $this->store->getByFilter($queryparams->sql);    
    //     $this->viewBuild->pageRender($this->pageTemplate, $this->sectionSpecify, $this->dataTable, $arrExpenses, $this->arrCategories, $this->arrSubcategories);
    // }

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
