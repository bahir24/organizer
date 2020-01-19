<?php
class mainController extends Controller {
  public $dataTable = "table";
  public $sectionSpecify = "hero";
  public function indexAction() {
    $arrExpenses = $this->store->getAll();
    $this->viewBuild->pageRender($this->pageTemplate, $this->sectionSpecify, $this->dataTable, $arrExpenses, $this->arrCategories, $this->arrSubcategories);

  }
}