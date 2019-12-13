<?php
//Подключаем файл с классами
require_once 'classes.php';
//Создаем экземпляр Organizer
//При запуске определяется необходимый файл БД
//и обновляется актуальное значение id
$db = new Organizer();

//Массив для тестов
$arrExpense['id'] = $db->newId;
$arrExpense['category'] = 'Одежда и обувь';
$arrExpense['subCategory'] = 'Куртка зимняя';
$arrExpense['sum'] = '5430';
$arrExpense['desc'] = 'Старая порвалась';

//Примеры вызовов
//Добавляем новую запись
# $db->addExpense($arrExpense);
//Удаляем запись
# $db->deleteExpense(1);
//Получаем все строки
# $db->watchDev();

//Закрываем соединение с базой
$db->close();
?>













<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="text" name="name"><br>
    <input type="text" name="b"><br>
    <input type="text" name="c"><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html> -->