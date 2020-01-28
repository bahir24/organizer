<table class="table table-sm table-striped table-expenses">
  <thead class="table-expenses-head">
    <tr>
    <?php
      $arrSortButtons = [
        $arrSortButton = [
          "sortField" => "purchaseDate",
          "buttonText" => "Дата",
        ],
        $arrSortButton = [
          "sortField" => "categoryName",
          "buttonText" => "Категория",
        ],
        $arrSortButton = [
          "sortField" => "subcategoryName",
          "buttonText" => "Подкатегория",
        ],
        $arrSortButton = [
          "sortField" => "price",
          "buttonText" => "Цена",
        ],                              
      ];
      foreach($arrSortButtons as $sortButton){
        echo "<th scope='col' class='date-sort'>
        <button type='button' class='sort-query-btn' data-order-field='$sortButton[sortField]' onclick='sortButton(this)'>
          <h6 class='sort-btn-head'>$sortButton[buttonText]</h6>";          
          if(($this->arrFilter->orderField == $sortButton['sortField']) && ($this->arrFilter->order == 'ASC')){ echo "<img src='/img/sort_up.svg' class='img-sort-asc'>
              <img src='/img/sort_down.svg' class='img-sort-desc sort-img-hidden'>";
          } else {
              echo "<img src='/img/sort_up.svg' class='img-sort-asc sort-img-hidden'>
              <img src='/img/sort_down.svg' class='img-sort-desc'>";
            }        
          echo "</button></th>";
      }
    ?>           
      <th scope="col">Примечание</th>
      <th scope="col">Действия</th>
    </tr>
  </thead>
  <tbody class="table-expenses-body">
    <?php
    foreach($this->arrExpense as $row) {
      $row->purchaseDate = $row->dateFormat($row->purchaseDate);
      echo 
        "<tr class='expense-row-$row->id'>
          <th scope='row'>$row->purchaseDate</th>          
          <td data-category-id='$row->categoryId'>$row->categoryName</td>
          <td data-subcategory-id='$row->subcategoryId'>$row->subcategoryName</td>
          <td>$row->price</td>
          <td>$row->description</td>
          <td>
          <div class='col-5 p-0 make-button-wrap'>
            <button type='button' class='btn btn-outline-success btn-sm py-0 px-1'  data-toggle='modal' data-target='#updateExpense' data-id='$row->id' onclick='prepareUpdate(this)'>
          <img src='/img/edit.svg' class='icon' alt='edit'>
          </button>
          </div>
          <div class='col-5 p-0 make-button-wrap'>";
          
          include "app/views/delbtn.php";
          echo "</td>
        </tr>
        </div>";
      }
    ?>
  </tbody>
</table>