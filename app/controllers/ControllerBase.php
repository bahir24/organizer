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
use app\Config;

class ControllerBase
{
    protected $store;
    protected $viewBuild = View::class;
    protected $pageTemplate = 'layout';
    protected $arrCategories = CategoryEntity::class;
    protected $arrSubcategories = SubcategoryEntity::class;
    protected $settings = Config::class;


    public function __construct()
    {
        $configDb = $this->settings::DB;
        $categoryStore = new CategoryStore($configDb['file']);
        $subCategoryStore = new SubcategoryStore($configDb['file']);
        $this->arrCategories = $categoryStore->getAll();
        $this->arrSubcategories = $subCategoryStore->getAll();
        $this->viewBuild = new View;
        $this->viewBuild->pageLayout = $this->pageTemplate;
        $this->viewBuild->arrCategories = $this->arrCategories;
        $this->viewBuild->arrSubcategories = $this->arrSubcategories;
        $this->store = new ExpensesStore($configDb['file']);
    }
}
