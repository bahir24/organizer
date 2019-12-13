<?php
class Organizer extends SQLite3 {

  //Переменная соответствующая последнему id в базе
  //Нужна для присваивания уникального значения полю
  //id в теле запроса SQL
  public $newId = 0;


  //При вызове экземпляра класса определяется файл БД
  //Обновляется значение актуального id
  function __construct() {
    $this->open('data_base/organizer.db');
    $this->watchDev();
    $this->getLastId();
  }

  //Метод класса, обновляющий актуальное значение id
  function getLastId() {
    $lastIndexQuery = $this->query('SELECT MAX(id) AS last_id FROM expense');
    $lastIndex = $lastIndexQuery->fetchArray()[last_id];
    $this->newId = ++$lastIndex;
  }

  //Модифицированный метод родительского объекта SQLite3,
  //обновляющий актуальное значение id при добавлении новой записи
  public function exec($query) {
    if (substr($query, 0, 6) == 'INSERT') {
      $this->getLastId();
    } else {
      //Здесь будут дополнительные действия для SQL запросов
      //UPDATE и DELETE
      echo 'change or delete';
    }    
    return parent::exec($query);
  }

  //Метод, добавляющий в базу новую строку
  public function addExpense($expenseNew) {
    if ($this->exec("INSERT INTO expense VALUES ('$expenseNew[id]', '$expenseNew[category]', '$expenseNew[subCategory]', time(), '$expenseNew[sum]', '$expenseNew[desc]')")) {
      echo 'Add new expense'; 
    } else {
      echo $this->lastErrorMsg();
    }
  }
  //Метод для отображения всего содержимого таблицы
  public function watchDev() {
    $watchTable = $this->query('SELECT * FROM expense');
    while ($row= $watchTable->fetchArray()) {
      echo '<pre>';
      print_r($row);
      echo '</pre>';
    }
  }
  public function getExpenseArr(
    /*Аргументом передается массив со следующими полями
    Тут будут переменные: 
      1. диапазон дат 
      2. категория 
      3. Подкатегория 
      4. Диапазон сумм
      5. Поле сортировки
      6. Количество строк
      */
  ) {

  }
    // {
    // $getExpenseString = $this->query('SELECT * FROM expense');
    // while ($row= $watchTable->fetchArray()) {
    //   echo '<pre>';
    //   print_r($row);
    //   echo '</pre>';
    // }
  // }
  //Метод для удаления строки из БД. В качестве аргумента
  //требует значение id удаляемой строки
  public function deleteExpense($deleteExpenseId) {
    if ($this->exec("DELETE FROM expense WHERE id=$deleteExpenseId")) {
      echo 'delete'; 
    } else {
      echo $this->lastErrorMsg();
    }
  }
  public function updateExpense($updateExpenseId, $arrUpdateExpense) {

    /*
    Здесь будет метод, который сравнит 
    старую и новую строки (array_diff()).
    Во время вызова будет получена соответствующая
    редактируемой строка (получена из базы по id) и
    значения полей редактируемой строки
    веб-интерфейса. Отличающиеся поля будут 
    обновлены в БД.
    */
  }
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

    /*
    Здесь будет метод, который обрабытывает
    JSON, полученый от клиента. JSON будет 
    содержать тип действия, в зависимости от
    которого метод будет задействовать
    методы класса Organizer (находится сверху).
    */
  }

  public function setExpenseArray() {
    /*
    Здесь будет метод, который отправляет
    JSON, содержащий строку из БД.
    Количество вызовов метода и набор
    отправляемых строк будут определяться 
    со стороны клиента
    */
  }
}

class Filter {
  public $datePeriod = [/*Дата начала Дата окончания*/];
  public $checkedCategory = [/*Выбранная категория 1, Выбранная категория 2,... и т. д.*/];
  public $checkedSubCategory = [/*Выбранная подкатегория 1, Выбранная подкатегория 2,... и т. д.*/];
  public $rangeSum = [/*Сумма 1, Сумма 2*/];
  public $sortBy = 'false'; //Поле сортировки
  public $stringCount = 1; //Количество выводимых строк
  public function spliceQuery() {
    /*Здесь будет метод, склеивающий строку запроса в зависимости от значений фильтров*/
  }

}