<?php
  class View {
    public $pageLayout;
    public $sectionFeatures;
    public $arrExpense; 
    public $arrFilter; 
    public $arrCategories; 
    public $arrSubcategories;  

    public function pageRender ()
      {
        echo "<pre>";
        // print_r($this->arrCategories->id);
        // echo $this->arrCategories[1];
        echo "</pre>";

      include 'app/views/'.$this->pageLayout.'.php';
    }
  }