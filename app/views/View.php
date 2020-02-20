<?php

namespace app\views;

class View
{
    public $pageLayout;
    public $sectionFeatures;
    public $arrExpense;
    public $arrFilter;
    public $arrCategories;
    public $arrSubcategories;

    public function __construct(){        
        $loader = new \Twig\Loader\FilesystemLoader('app/templates');
        $twig = new \Twig\Environment($loader);
        $this->template = $twig->load('layout.html', ['strict_variables' => true]);                
    }

    public function pageRender()
    {
        echo $this->template->render(['arrFilter' => $this->arrFilter, 'arrExpense' => $this->arrExpense, 'arrCategories' => $this->arrCategories, 'arrSubcategories' => $this->arrSubcategories, 'sortButtons' => $this->sortButtons]);
    }
}
