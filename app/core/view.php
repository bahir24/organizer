<?php
  class View {
    public function pageRender($pageLayout, $sectionFeatures, $varContent, $arrExpenses, $arrCategories, $arrSubcategories) {            
      include 'app/views/layout.php';
    }
  }