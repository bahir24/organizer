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
          "sortField" => "purchaseDate",
          "buttonText" => "Дата",
        ],
        [
          "sortField" => "categoryName",
          "buttonText" => "Категория",
        ],
        [
          "sortField" => "subcategoryName",
          "buttonText" => "Подкатегория",
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
        foreach ($this->arrExpense as $fieldData) {
            $fieldData->purchaseDate = date('Y-m-d', $fieldData->purchaseDate);            
        }
        $this->viewBuild->arrFilter = $queryParams;
        $this->viewBuild->sectionFeatures = $this->sectionSpecify;
        $this->viewBuild->arrExpense = $this->arrExpense;
        $this->viewBuild->sortButtons = $this->sortButtons;
        $this->viewBuild->pageRender();
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
