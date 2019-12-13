<?php

require_once 'classes.php';


$db = new Organizer();

$arrExpense['id'] = $db->newId;
$arrExpense['category'] = 'Одежда и обувь';
$arrExpense['subCategory'] = 'Куртка зимняя';
$arrExpense['sum'] = '5430';
$arrExpense['desc'] = 'Старая порвалась';

// $db->addExpense($arrExpense);


// $db->deleteExpense(1);

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