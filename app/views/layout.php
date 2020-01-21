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
      <?php
      include "app/views/menu.php";
      ?>
    </div>
  </header>
  <?php
  include 'app/views/'."$this->sectionFeatures".".php";
  ?>
  <script src="/js/categoryButtons.js"></script>
  <script src="/js/jquery.slim.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>