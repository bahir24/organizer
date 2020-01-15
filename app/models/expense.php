<?php
class Expense extends ExpenseEntity
{
    public $categoryName;
    public $subcategoryName;

    public function dateFormat($purchaseDate) {
        $fddte = date('m.d.Y', $purchaseDate);
        return $fddte;
        // echo ;
    }
}
