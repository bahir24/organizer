<?php
class Expense extends ExpenseEntity {
	public $categoryName;
	public $subcategoryName;
	public function dateFormat($purchaseDate) {
		$formattedDate = date('d.m.Y', $purchaseDate);
		return $formattedDate;
	}
}
