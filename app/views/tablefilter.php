<table class="table table-sm table-striped table-expenses">
  <thead class="table-expenses-head">
    <tr>
      <th scope="col" class="date-sort">
        <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Дата</h6>          
          <input class="input-sort" id="ascDate" form="filterQuery" type="radio" name="sortByDate" value="ASC" <?php if(array_key_exists('dateASC', $sortFilterSave)){echo $sortFilterSave['dateASC'];} ?>>  <input class="input-sort" id="descDate" form="filterQuery" type="radio" name="sortByPurchaseDate" value="DESC" <?php if(array_key_exists('dateDESC',$sortFilterSave)) {echo $sortFilterSave['dateDESC'];}?>>
          <img src="/img/sort_up.svg" class="img-sort-asc <?php 
          if(array_key_exists('dateASCimg', $sortFilterSave)) {
            echo $sortFilterSave['dateASCimg'];
            } else {
              if(!array_key_exists('dateDESCimg',$sortFilterSave)) { 
            echo " sort-img-hidden";}} ?>">
          <img src="/img/sort_down.svg" class="img-sort-desc <?php if(array_key_exists('dateDESCimg',$sortFilterSave)) {echo $sortFilterSave['dateDESCimg'];}?>">
        </button>
      
      </th>
      <th scope="col"  class="category-sort">
         <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Категория</h6>          
          <input class="input-sort" id="ascCategory" form="filterQuery" type="radio" name="sortByCategoryId" value="ASC" <?php if(array_key_exists('categoryASC',$sortFilterSave)) {echo $sortFilterSave['categoryASC'];}?>>  <input class="input-sort" id="descCategory" form="filterQuery" type="radio" name="sortByCategoryId" value="DESC" <?php if(array_key_exists('categoryDECS',$sortFilterSave)) {echo $sortFilterSave['categoryDECS'];}?>>
          <img src="/img/sort_up.svg" class="img-sort-asc <?php if(array_key_exists('categoryASCimg',$sortFilterSave)) {echo $sortFilterSave['categoryASCimg'];} else {
              if(!array_key_exists('categoryDESCimg',$sortFilterSave)) {echo "sort-img-hidden";}}?>">
          <img src="/img/sort_down.svg" class="img-sort-desc <?php if(array_key_exists('categoryDESCimg',$sortFilterSave)) {echo $sortFilterSave['categoryDESCimg'];}?>">
        </button>
      
    </th>
      <th scope="col"  class="subcategory-sort">
        <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Подкатегория</h6>          
          <input class="input-sort" id="ascSubcategory" form="filterQuery" type="radio" name="sortBySubcategoryId" value="ASC" <?php if(array_key_exists('subcategoryASC',$sortFilterSave)) {echo $sortFilterSave['subcategoryASC'];}?>><input class="input-sort" id="descSubcategory" form="filterQuery" type="radio" name="sortBySubcategoryId" value="DESC" <?php if(array_key_exists('subcategoryDESC',$sortFilterSave)) {echo $sortFilterSave['subcategoryDESC'];}?>> 
          <img src="/img/sort_up.svg" class="img-sort-asc <?php if(array_key_exists('subcategoryASCimg',$sortFilterSave)) {echo $sortFilterSave['subcategoryASCimg'];} else {
              if(!array_key_exists('subcategoryDESCimg',$sortFilterSave)) {echo "sort-img-hidden";}} ?>">
          <img src="/img/sort_down.svg" class="img-sort-desc <?php if(array_key_exists('subcategoryDESCimg',$sortFilterSave)) {echo $sortFilterSave['subcategoryDESCimg'];}?>">
        </button> 
      
    </th>
      <th scope="col" class="price-sort">
        <button type="submit" class="sort-query-btn" form="filterQuery" onclick="sortButton(this)">
          <h6 class="sort-btn-head">Цена</h6>          
          <input class="input-sort" id="ascPrice" form="filterQuery" type="radio" name="sortByPrice" value="ASC" <?php  if(array_key_exists('priceASC',$sortFilterSave)) {echo $sortFilterSave['priceASC'];}?>>  
          <input class="input-sort" id="descPrice" form="filterQuery" type="radio" name="sortByPrice" value="DESC" <?php if(array_key_exists('priceDESC',$sortFilterSave)) {echo $sortFilterSave['priceDESC'];}?>>          
          <img src="/img/sort_up.svg" class="img-sort-asc <?php if(array_key_exists('priceDESCimg',$sortFilterSave)) {echo $sortFilterSave['priceDESCimg'];} else {
              if(!array_key_exists('priceDESCimg',$sortFilterSave)) {echo "sort-img-hidden";}}?>">
          <img src="/img/sort_down.svg" class="img-sort-desc <?php if(array_key_exists('priceDESCimg',$sortFilterSave)) {echo $sortFilterSave['priceDESCimg'];}?>">
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