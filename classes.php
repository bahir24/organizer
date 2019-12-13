<?php
class Organizer extends SQLite3 {
  public $newId = 0;

  function __construct() {
    $this->open('data_base/organizer.db');
    $this->watchDev();
    $this->getLastId();
  }
  function getLastId() {
    $lastIndexQuery = $this->query('SELECT MAX(id) AS last_id FROM expense');
    $lastIndex = $lastIndexQuery->fetchArray()[last_id];
    $this->newId = ++$lastIndex;
  }
  public function exec($query) {
    if (substr($query, 0, 6) == 'INSERT') {
      $this->getLastId();
    } else {
      echo 'change or delete';
    }    
    return parent::exec($query);
  }
  public function addExpense($expenseNew) {
    if ($this->exec("INSERT INTO expense VALUES ('$expenseNew[id]', '$expenseNew[category]', '$expenseNew[subCategory]', time(), '$expenseNew[sum]', '$expenseNew[desc]')")) {
      echo 'Add new expense'; 
    } else {
      echo $this->lastErrorMsg();
    }
  }
  public function watchDev() {
    $watchTable = $this->query('SELECT * FROM expense');
    while ($row= $watchTable->fetchArray()) {
      echo '<pre>';
      print_r($row);
      echo '</pre>';
    }
  }
  public function deleteExpense($deleteExpenseId) {
    if ($this->exec("DELETE FROM expense WHERE id=$deleteExpenseId")) {
      echo 'delete'; 
    } else {
      echo $this->lastErrorMsg();
    }
  }
  // public function updateExpense($updateExpenseId, $arrUpdateExpense) {
    
  // }
}

class Expense {
  public $id;
  public $category;
  public $subcategory;
  public $date;
  public $sum;
  public $desc;
  public $expenseArray = [
    'id' => '',
    'category' => '',
    'subcategory' => '',
    'date' => '',
    'sum' => '',
    'desc' => ''
  ];

  public function getExpenseArray() {
    $expenseArray [id] = $this->id;
    $expenseArray [category] = $this->category;
    $expenseArray [subcategory] = $this->subcategory;
    $expenseArray [date] = $this->date;
    $expenseArray [sum] = $this->sum;
    $expenseArray [desc] = $this->desc;

    return $expenseArray;
  }
}