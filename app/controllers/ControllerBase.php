<?php

namespace app\controllers;

use app\models\Expense;
use app\models\QueryParams;
use app\entities\CategoryEntity;
use app\entities\SubcategoryEntity;
use app\stores\CategoryStore;
use app\stores\SubcategoryStore;
use app\stores\ExpensesStore;
use app\views\View;

class ControllerBase
{
  protected $store;
  protected $viewBuild = View::class;
  protected $db = "db/organizer.db";
  protected $pageTemplate = 'layout';
  protected $arrCategories = CategoryEntity::class;
  protected $arrSubcategories = SubcategoryEntity::class;

  function __construct()
  {
    $categoryStore = new CategoryStore($this->db);
    $subCategoryStore = new SubcategoryStore($this->db);
    $this->arrCategories = $categoryStore->getAll();
    $this->arrSubcategories = $subCategoryStore->getAll();
    $this->viewBuild = new View;
    $this->viewBuild->pageLayout = $this->pageTemplate;
    $this->viewBuild->arrCategories = $this->arrCategories;
    $this->viewBuild->arrSubcategories = $this->arrSubcategories;
    $this->store = new ExpensesStore($this->db);
  }
}
