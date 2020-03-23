<?php

namespace app\controllers;

use app\entities\CategoryEntity;
use app\entities\SubcategoryEntity;
use app\stores\CategoryStore;
use app\stores\SubcategoryStore;
use app\stores\ExpensesStore;
use app\Config;

class ControllerBase
{
    protected $store;
    protected $pageTemplate = 'layout';
    protected $arrCategories = CategoryEntity::class;
    protected $arrSubcategories = SubcategoryEntity::class;


    public function __construct()
    {
        $this->store = new ExpensesStore(Config::$dataBase);

        $categoryStore = new CategoryStore(Config::$dataBase);
        $this->arrCategories = $categoryStore->getAll();

        $subCategoryStore = new SubcategoryStore(Config::$dataBase);        
        $this->arrSubcategories = $subCategoryStore->getAll();

        $loader = new \Twig\Loader\FilesystemLoader(
            [
                'app/templates',
                'app/templates/blocks',
                'app/templates/elements'
            ]
        );
        $twig = new \Twig\Environment($loader);
        $this->template = $twig->load('layout.html', 
            [
                'strict_variables' => true
            ]
        );
    }
}
