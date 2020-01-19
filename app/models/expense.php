<?php
class Expense extends ExpenseEntity {
	public $categoryName;
	public $subcategoryName;
	public function dateFormat($purchaseDate) {
		$fddte = date('d.m.Y', $purchaseDate);
		return $fddte;
	}
}
