<?php

use app\core\Router;
use app\stores\CategoryStore;
use app\entities\CategoryEntity;
use app\entities\SubcategoryEntity;
use app\entities\ExpenseEntity;


error_reporting(E_ALL);
ini_set('display_errors', 1);
define('ROOT', __DIR__);

spl_autoload_register(function (string $className) {
  require_once ROOT . '/' . str_replace( '\\', '/', $className ) . '.php';
});

// if(file_exists('db/organizer.db')){
//   $BaseMigration = new PDO('sqlite:' . 'db/organizer.db');
//   $BaseMigration->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $BaseMigration->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//   $sql = "SELECT * FROM sqlite_sequence";
//   $query = $BaseMigration->query($sql);
//   $arrTables = $query->fetchAll();
//   foreach($arrTables as $countIndex => $table){
//   $BaseMigration->SetAttribute(PDO::FETCH_COLUMN, 5);

//   $sqlFields = "pragma table_info($table[name])";
  

//   $queryFields = $BaseMigration->query($sqlFields);
//   $arrFields[$countIndex] = $queryFields->fetchAll();
//   }
  
  
//   // echo $table1;

//   $categoryModel = new CategoryEntity;
//   $arrModelCategoryVars = array_keys(get_object_vars($categoryModel));
//   $subcategoryModel = new SubcategoryEntity;
//   $arrModelSubcategoryVars = array_keys(get_object_vars($categoryModel));
//   $expenseModel = new ExpenseEntity;
//   $arrModelExpenseVars = array_keys(get_object_vars($expenseModel));

//   echo "<pre>";
//   print_r($arrFields);
//   echo "</pre>";

// } else {
//   echo 'here';
// }

Router::start();