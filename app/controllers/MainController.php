<?php

namespace app\controllers;

use app\models\QueryParams;
use app\entities\ExpenseEntity;
use app\services\ExpenseQueryBuilder;

class MainController extends ControllerBase
{
    public $sectionSpecify = "filter";

    function __construct()
    {
        $arrFilterQuery = [];

        parent::__construct();
        // if (array_key_exists('startPurchaseDate', $arrFilterQuery)) {
        //   $this->arrFilter = new QueryParams($arrFilterQuery);
        // }
    }

    public function indexAction()
    {
        $queryParams = QueryParams::CreateFromQuery();
        $queryWithValues = ExpenseQueryBuilder::BuildQuery($queryParams);

        $this->arrExpense = $this->store->getByFilter($queryWithValues);


        // if (empty($this->arrFilter->sql)) {
        //     $this->arrExpense = $this->store->getAll();
        // } else {
        //     $this->viewBuild->arrFilter = $this->arrFilter;
        //     $this->arrExpense = $this->store->getByFilter($this->arrFilter->sql);
        //     $this->sectionSpecify = 'filterfill';
        // }

        $this->viewBuild->sectionFeatures = $this->sectionSpecify;
        $this->viewBuild->arrExpense = $this->arrExpense;
        $this->viewBuild->pageRender();
    }

    public function deleteAction()
    {
        $exEntity = new ExpenseEntity;
        $exEntity->postStrToObject($_POST);
        $this->store->delete($exEntity->id);
        header("Location: http://organizer.com/");
    }

    public function addExpenseAction()
    {
        $exEntity = new ExpenseEntity;
        $exEntity->postStrToObject($_POST);
        $this->store->add($exEntity);
        header("Location: http://organizer.com/");
    }

    public function updateExpenseAction()
    {
        $exEntity = new ExpenseEntity;
        $exEntity->postStrToObject($_POST);
        $this->store->update($exEntity);

        header("Location: http://organizer.com/");
    }
}
