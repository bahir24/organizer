<?php

namespace app\entities;

class ExpenseEntity
{
    public $id;
    public $purchaseDate;
    public $updatedDate;
    public $categoryId;
    public $subcategoryId;
    public $price;
    public $description;
    public function postStrToObject($arrAddExpense)
    {
        foreach ($arrAddExpense as $postVarName => $postVar) {
            $this->$postVarName = $postVar;
        }
    }
}
