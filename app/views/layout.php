<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <title>Organizer</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link" href="/">Добавить расход</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report">Отчет</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="expenses">Все раходы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categories">Настройка</a>
        </li>
      </ul>
    </div>
  </header>

  <?php
  include "app/views/$sectionFeatures.php";
  ?>

  <script src="/js/jquery.slim.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>