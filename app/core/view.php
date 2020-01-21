<?php
  class View {
    public $pageLayout;
    public $sectionFeatures = 123;
    public $arrExpense; 
    public $arrFilter; 
    public $arrCategories; 
    public $arrSubcategories;  

    public function pageRender ()
      {
        echo $this->sectionFeatures;
      include 'app/views/'.$this->pageLayout.'.php';
    }
  }