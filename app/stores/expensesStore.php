<?php

class ExpensesStore extends StoreBase {
	protected $entity = ExpenseEntity::class;

	public function __construct($db) {
		parent::__construct($db, 'expenses');
	}

	public function add(ExpenseEntity $expense)	{
		$columns = $this->objectKeysToString($expense, ['id']);
		$placeholders = $this->objectKeysToPlaceholdersString($expense, ['id']);
		$expense->updatedDate = time();
		$values = $this->objectToValues($expense, ['id']);
		$sql = "INSERT INTO $this->table($columns) VALUES($placeholders)";
		$query = $this->pdo->prepare($sql);
		$query->execute($values);
	}

	public function update(ExpenseEntity $expense) {
		$setPairs = $this->objectKeysToSetPairsString($expense, ['id']);
		$expense->updatedDate = time();
		$values = $this->objectToValues($expense);
		$sql = "UPDATE $this->table SET $setPairs WHERE id = :id";
		$query = $this->pdo->prepare($sql);
		$query->execute($values);
	}

	public function getAll() {
		$sql = "SELECT expenses.*, categories.name AS categoryName, subcategories.name AS subcategoryName FROM expenses	LEFT JOIN categories ON categories.id = expenses.categoryId	LEFT JOIN subcategories ON subcategories.id = expenses.subcategoryId";
		$query = $this->pdo->query($sql);		
		if(class_exists('Expense')) {            		
		$query->setFetchMode(PDO::FETCH_CLASS, Expense::class);		
		return $query->fetchAll();
		}
	}
}
