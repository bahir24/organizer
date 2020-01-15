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
      echo '<tr>';
      extract($row);
      // print_r($row);
      
        
        echo $id;
        // echo '<pre>';
        // print_r($name."===>".$cells);
        // echo '</pre>';
        // $number = $cells[$fieldName];
        // echo $number;
      //  echo "<th scope='row'>$cells[$key]</th>";
                
    }
    ?>    
  </tbody>
</table>



<!-- <tr>
      <th scope="row">10.12.2019</th>
      <td>02.01.2020</td>
      <td>Еда</td>
      <td>Овощи</td>
      <td>50р</td>
      <td>3шт</td>
      <td>150р</td>
      <td>На салат</td>
      <td>Купить</td>
      <td>
        <button type="button" class="btn btn-outline-success btn-sm py-0 px-1"><img src="/img/edit.svg"
            class="icon" alt="edit"></button>
        <button type="button" class="btn btn-outline-danger btn-sm py-0 px-1"><img src="/img/exit.svg"
            class="icon" alt="delete"></button>
      </td>
    </tr>             -->