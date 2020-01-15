<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <title>Organizer</title>
</head>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Изменено</th>
      <th scope="col">Категория</th>
      <th scope="col">Подкатегория</th>
      <th scope="col">Цена</th>
      <th scope="col">Количество</th>
      <th scope="col">Сумма</th>
      <th scope="col">Примечание</th>
      <th scope="col">Заметка</th>
      <th scope="col">Действия</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($arrExpenses as $row) {
      $row->purchaseDate = $row::dateFormat($row->purchaseDate);
      $row->updatedDate = $row::dateFormat($row->updatedDate);
      echo "<tr>
              <th scope='row'>$row->purchaseDate</th>
              <td>$row->updatedDate</td>
              <td>$row->categoryName</td>
              <td>$row->subcategoryName</td>
              <td>$row->price</td>
              <td>$row->quantity</td>
              <td>$row->sum</td>
              <td>$row->description</td>
              <td>$row->notes</td>
              <td>
                <form class='d-inline-block' action='expenses/edit' method='POST'>
                  <input type='hidden' name='id' value='$row->id'>
                  <button type='submit' class='btn btn-outline-success btn-sm py-0 px-1'>
                  <img src='/img/edit.svg' class='icon' alt='edit'>
                  </button>
                </form>
                <form class='d-inline-block' action='expenses/delete' method='POST'>
                  <input type='hidden' name='id' value='$row->id'>
                  <button type='submit' class='btn btn-outline-danger btn-sm py-0 px-1'>
                  <img src='/img/exit.svg' class='icon' alt='delete'>
                  </button>
                </form>
              </td>
          </tr>";
          }
          ?>
  </tbody>
</table>