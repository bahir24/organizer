<?php

namespace app\controllers;

use app\models\QueryParams;
use app\entities\ExpenseEntity;
use app\services\ExpenseQueryBuilder;

class MainController extends ControllerBase
{
    public $sectionSpecify = "filter";

    public function indexAction()
    {
        $queryParams = QueryParams::CreateFromQuery();
        $queryWithValues = ExpenseQueryBuilder::BuildQuery($queryParams);
        $this->arrExpense = $this->store->getByFilter($queryWithValues);
        $this->viewBuild->arrFilter = $queryParams;
        $this->viewBuild->sectionFeatures = $this->sectionSpecify;
        $this->viewBuild->arrExpense = $this->arrExpense;
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
