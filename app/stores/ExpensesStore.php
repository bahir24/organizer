<?php

namespace app\stores;

use PDO;
use app\entities\ExpenseEntity;
use app\models\Expense;

class ExpensesStore extends StoreBase
{
    protected $entity = ExpenseEntity::class;

    public function __construct($db)
    {
        parent::__construct($db, 'expenses');
    }

    public function add(ExpenseEntity $expense)
    {
        $columns = $this->objectKeysToString($expense, ['id']);
        $placeholders = $this->objectKeysToPlaceholdersString($expense, ['id']);
        $expense->purchaseDate = strtotime($expense->purchaseDate);
        $expense->updatedDate = strtotime(date('d-m-Y'));
        $values = $this->objectToValues($expense, ['id']);
        $sql = "INSERT INTO $this->table($columns) VALUES($placeholders)";
        $query = $this->pdo->prepare($sql);
        $query->execute($values);
        
        return $this->getLastId();
    }

    public function update(ExpenseEntity $expense)
    {
        $setPairs = $this->objectKeysToSetPairsString($expense, ['id']);
        $expense->purchaseDate = strtotime($expense->purchaseDate);
        $expense->updatedDate = strtotime(date('d-m-Y'));
        $values = $this->objectToValues($expense);
        $sql = "UPDATE $this->table SET $setPairs WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute($values);
        
        return $this->getLastId();
    }

    public function getAll()
    {
        $sql = "SELECT expenses.*, categories.name AS categoryName, subcategories.name AS subcategoryName FROM expenses	LEFT JOIN categories ON categories.id = expenses.categoryId	LEFT JOIN subcategories ON subcategories.id = expenses.subcategoryId ORDER BY id DESC";
        $query = $this->pdo->query($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Expense::class);

        return $query->fetchAll();
    }

    public function getByFilter($queryParams)
    {
        $sql = $queryParams["sql"];
        $values = $queryParams["values"];
        $query = $this->pdo->prepare($sql);
        $query->execute($values);
        $query->setFetchMode(PDO::FETCH_CLASS, Expense::class);
        
        return $query->fetchAll();
    }
}
