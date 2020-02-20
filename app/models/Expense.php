<?php

namespace app\models;

use app\entities\ExpenseEntity;

class Expense extends ExpenseEntity
{
    public $categoryName;
    public $subcategoryName;    
}
