<?php
class Expense extends ExpenseEntity {
	public $categoryName;
	public $subcategoryName;
	public function dateFormat($noFormattedDate) {
		$formattedDate = date('d.m.Y', $noFormattedDate);
		return $formattedDate;
	}
}
