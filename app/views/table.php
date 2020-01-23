<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Изменено</th>
      <th scope="col">Категория</th>
      <th scope="col">Подкатегория</th>
      <th scope="col">Цена</th>
      <th scope="col">Примечание</th>
      <th scope="col">Действия</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($this->arrExpense as $row) {
      $row->purchaseDate = $row->dateFormat($row->purchaseDate);
      $row->updatedDate = $row->dateFormat($row->updatedDate);
      echo 
        "<tr class='expense-row-$row->id'>
          <th scope='row'>$row->purchaseDate</th>
          <td>$row->updatedDate</td>
          <td data-category-id='$row->categoryId'>$row->categoryName</td>
          <td data-subcategory-id='$row->subcategoryId'>$row->subcategoryName</td>
          <td>$row->price</td>
          <td>$row->description</td>
          <td>                               
          <button type='button' class='btn btn-outline-success btn-sm py-0 px-1'  data-toggle='modal' data-target='#updateExpense' data-id='$row->id' onclick='prepareUpdate(this)'>
          <img src='/img/edit.svg' class='icon' alt='edit'>
          </button>";
          include "app/views/$delButtonType.php";
          echo "</td>
        </tr>";
      }
    ?>
  </tbody>
</table>