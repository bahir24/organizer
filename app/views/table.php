<table class="table table-sm table-striped table-expenses">
  <thead class="table-expenses-head">
    <tr>
      <th scope="col" class="date-sort">
        <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Дата</h6>          
          <input class="input-sort" id="ascDate" form="filterQuery" type="radio" name="sortByDate" value="ASC">  <input class="input-sort" id="descDate" form="filterQuery" type="radio" name="sortByPurchaseDate" value="DESC">          
          <img src="/img/sort_up.svg" class="img-sort-asc sort-img-hidden">
          <img src="/img/sort_down.svg" class="img-sort-desc">
        </button>
      
      </th>
      <th scope="col"  class="category-sort">
         <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Категория</h6>          
          <input class="input-sort" id="ascCategory" form="filterQuery" type="radio" name="sortByCategoryId" value="ASC">  <input class="input-sort" id="descCategory" form="filterQuery" type="radio" name="sortByCategoryId" value="DESC">          
          <img src="/img/sort_up.svg" class="img-sort-asc sort-img-hidden">
          <img src="/img/sort_down.svg" class="img-sort-desc">
        </button>
      
    </th>
      <th scope="col"  class="subcategory-sort">
        <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Подкатегория</h6>          
          <input class="input-sort" id="ascSubcategory" form="filterQuery" type="radio" name="sortBySubcategoryId" value="ASC">  <input class="input-sort" id="descSubcategory" form="filterQuery" type="radio" name="sortBySubcategoryId" value="DESC">          
          <img src="/img/sort_up.svg" class="img-sort-asc sort-img-hidden">
          <img src="/img/sort_down.svg" class="img-sort-desc">
        </button> 
      
    </th>
      <th scope="col" class="price-sort">
        <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Цена</h6>          
          <input class="input-sort" id="ascPrice" form="filterQuery" type="radio" name="sortByPrice" value="ASC">  <input class="input-sort" id="descPrice" form="filterQuery" type="radio" name="sortByPrice" value="DESC">          
          <img src="/img/sort_up.svg" class="img-sort-asc sort-img-hidden">
          <img src="/img/sort_down.svg" class="img-sort-desc">
        </button> 
      
    </th>
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