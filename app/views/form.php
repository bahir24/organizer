<div class="modal fade" id="addExpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Добавить расход</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="w-100" action="main/addExpense" method="POST" id="formAddExpense">
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
                        echo "<a class='dropdown-item' data-id='$categoryName->id' onclick='changeHead(this)'>$categoryName->name</a>
                        <div class='dropdown-divider'></div>";
                    }
                  ?>                          
                </div>
                <input type='hidden' name="categoryId" value="">
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
                      echo "<a class='dropdown-item' data-id='$subcategoryName->id' data-category-id='$subcategoryName->categoryId' onclick='changeHeadSub(this)'>$subcategoryName->name</a>
                      <div class='dropdown-divider'></div>";
                  }
                ?>                                               
                </div>
                <input type='hidden' name="subcategoryId" value="">
              </div>
            </div>           
            <div class="input-group mb-2">
              <label class="streched">
                <h6 class="mb-1">Дата</h6>
                <input type="date" name="purchaseDate" class="form-control expense-day" value="<?php echo date("Y-m-d") ?>">
              </label>
            </div>
            <div class="input-group mb-2">
              <label class="streched">
                <h6 class="mb-1">Стоимость</h6>
                <div class="d-flex">
                  <input type="text" name="price" class="form-control input-calc">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary btn-calc" type="button">
                      <img src="/img/calc.svg" class="icon" alt="calc">
                    </button>
                  </div>
                </div>
              </label>
            </div>
            <div class="input-group">
              <label class="streched">
                <h6 class="mb-1">Примечание</h6>
                <textarea name="description" class="form-control h-100"></textarea>
              </label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Отмена</button>
        <button type="submit" form="formAddExpense" class="btn btn-success btn-lg">Записать</button>
      </div>
    </div>
  </div>
</div>