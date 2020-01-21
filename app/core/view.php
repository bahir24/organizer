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
      include 'app/views/'.$this->pageLayout.'.php';
    }
  }