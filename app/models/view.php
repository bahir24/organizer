<?php
  class View {
    //получаем готовый шаблон с динамическим содержимым
    function pageBuild($varContent, $Pagelayout, $arrExpense) {
      //проверка входящих данных
      if(($arrExpense) && is_array($arrExpense)) {
        $expenseTable = "//заполняем ячейки таблицы значениями из массива + ...";
      } else {
        echo 'что-то пошло не так'; //TO DO
      }
      ob_start();
      include 'path/'.$Pagelayout.'.php';
      return ob_get_clean();
    }
    //отправляем шаблон в браузер
    function pageShow() {
      echo $this->pageBuild($varContent, $Pagelayout, $arrExpense);
    }
    //
  }