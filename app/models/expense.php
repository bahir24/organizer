<?php
class Expense extends ExpenseEntity {
	public $categoryName;
	public $subcategoryName;
	public function dateFormat($noFormattedDate) {
		$formattedDate = date('Y-m-d', $noFormattedDate);
		return $formattedDate;
	}
}
