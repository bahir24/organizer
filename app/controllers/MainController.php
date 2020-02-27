<?php

namespace app\controllers;

use app\models\QueryParams;
use app\entities\ExpenseEntity;
use app\services\ExpenseQueryBuilder;

class MainController extends ControllerBase
{
    public $sectionSpecify = "filter";
    public $sortButtons = [        
        [
          "sortField" => "categoryName",
          "buttonText" => "Категория",
        ],
        [
          "sortField" => "subcategoryName",
          "buttonText" => "Подкатегория",
        ],
        [
          "sortField" => "purchaseDate",
          "buttonText" => "Дата",
        ],
        [
          "sortField" => "price",
          "buttonText" => "Цена",
        ],
      ];

    public function indexAction()
    {
        $queryParams = QueryParams::CreateFromQuery();
        $queryWithValues = ExpenseQueryBuilder::BuildQuery($queryParams);
        $this->arrExpense = $this->store->getByFilter($queryWithValues);
        $this->arrFilter = $queryParams;
        echo $this->template->render(['arrFilter' => $this->arrFilter, 'arrExpense' => $this->arrExpense, 'arrCategories' => $this->arrCategories, 'arrSubcategories' => $this->arrSubcategories, 'sortButtons' => $this->sortButtons]);
    }

    public function deleteAction()
    {
        $queryParams = QueryParams::CreateFromQuery();
        echo $queryParams->deleteExpenseId;
        $this->store->delete($queryParams->deleteExpenseId);
    }

    public function addExpenseAction()
    {
        $exEntity = new ExpenseEntity;
        $exEntity->postStrToObject($_POST);
        $this->store->add($exEntity);
    }

    public function updateExpenseAction()
    {
        $exEntity = new ExpenseEntity;
        $exEntity->postStrToObject($_POST);
        $this->store->update($exEntity);
    }
}
