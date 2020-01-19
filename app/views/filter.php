<section class="filter">
  <div class="container">
    <div class="row filter-input mb-2">
      <h2 class="col-12 mb-2 text-center">Фильтр и сортировка</h2>
     
      <form class="filter" action="expenses/filter" method="POST">
        <div class="row">
          <div class="col-2">
            <h6>По дате создания</h6>
            <div class="form-group">
              <input type="date" name="startPurchaseDate" class="form-control" id="startPurchaseDate"
                aria-describedby="emailHelp" placeholder="Начало">
            </div>
            <div class="form-group">
              <input type="date" name="endPurchaseDate" class="form-control" id="endPurchaseDate" placeholder="Конец">
            </div>
          </div>
          <div class="col-2">
            <h6>По дате изменения</h6>
            <div class="form-group">
              <input type="date" name="startUpdateDate" class="form-control" id="startUpdateDate" aria-describedby="emailHelp"
                placeholder="Начало">
            </div>
            <div class="form-group">
              <input type="date" name="endUpdateDate" class="form-control" id="endUpdateDate" placeholder="Конец">
            </div>
          </div>
          <div class="col-2">
            <h6>По принадлежности</h6>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="btn-group dropright w-100 btn-group-category">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category" id="cathegoryBtn"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Категория
                  </button>
                  <div class="dropdown-menu">
                  <?php
                      foreach ($arrCategories as $categoryName) {                        
                          echo "<a class='dropdown-item' data-id='$categoryName->id' href='#' onclick='changeHead(this)'>$categoryName->name</a>
                              <div class='dropdown-divider'></div>";
                      }
                    ?>                          
                  </div>
                  <input type='hidden' name="categoryId" value="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="btn-group dropright w-100 btn-group-subcategory">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category"
                    id="subCathegoryBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
                    Подкатегория
                  </button>
                  <div class="dropdown-menu">
                    <?php
                    
                      foreach ($arrSubcategories as $subcategoryName) {
                          echo "<a class='dropdown-item' data-id='$subcategoryName->id' data-category-id='$subcategoryName->categoryId' href='#' onclick='changeHeadSub(this)'>$subcategoryName->name</a>
                              <div class='dropdown-divider'></div>";
                      }
                    ?>                                               
                  </div>
                  <input type='hidden' name="subcategoryId" value="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <h6>По цене</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="startPrice" aria-describedby="emailHelp" placeholder="От" name="startPrice">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="endPrice" placeholder="До" name="endPrice">
            </div>
          </div>
          <div class="col-2">
            <h6>По количеству</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="startQuantity" aria-describedby="emailHelp" placeholder="От" name="startQuantity">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="endQuantity" placeholder="До" name="endQuantity">
            </div>
          </div>
          <div class="col-2">
            <h6>По стоимости</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="startSum" aria-describedby="emailHelp" placeholder="От" name="startSum">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="endSum" placeholder="До" name="endSum">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Фильтровать</button>
      </form>
    </div>
    <div class="row">

     <?php
      include 'app/views/table.php';
      ?>

    </div>
  </div>
</section>
<script src="/js/categoryButtons.js"></script>