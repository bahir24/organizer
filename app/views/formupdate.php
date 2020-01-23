  <div class="modal fade" id="updateExpense" tabindex="-1" role="dialog" aria-labelledby="updateExpenseTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Изменить расход</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="w-100" action="main/updateExpense" method="POST" id="formUpdateExpense">
              <div class="form-group">
                <div class="input-group mb-2">
                <div class="btn-group dropright w-100 btn-group-category">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Категория
                  </button>
                  <div class="dropdown-menu">
                    <?php
                      foreach ($this->arrCategories as $categoryName) {
                        echo "<button type='button' class='dropdown-item' data-id='$categoryName->id' onclick='changeHead(this)'>$categoryName->name</button>
                        <div class='dropdown-divider'></div>";
                      }
                    ?>
                  </div>
                  <input type='hidden' form="formUpdateExpense" name="categoryId" value="">
                </div>
              </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                <div class="btn-group dropright w-100 btn-group-subcategory">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Подкатегория
                  </button>
                  <div class="dropdown-menu">
                    <?php
                    
                      foreach ($this->arrSubcategories as $subcategoryName) {
                        echo "<button type='button' class='dropdown-item' data-id='$subcategoryName->id' data-category-id='$subcategoryName->categoryId' onclick='changeHeadSub(this)'>$subcategoryName->name</button>
                        <div class='dropdown-divider'></div>";
                      }
                    ?>
                  </div>
                  <input type='hidden' form="formUpdateExpense" name="subcategoryId" value="">
                </div>
              </div>
              </div>
              <div class="input-group mb-2">
                <label class="streched">
                  <h6 class="mb-1">Дата</h6>
                  <input type="date" form="formUpdateExpense" name="purchaseDate" class="form-control expense-day" value="<?php echo date("Y-m-d") ?>">
                </label>
              </div>
              <div class="input-group mb-2">
                <label class="streched">
                  <h6 class="mb-1">Стоимость</h6>
                  <div class="d-flex">
                    <input type="text" form="formUpdateExpense" name="price" class="form-control input-calc">
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
                  <textarea name="description" form="formUpdateExpense" class="form-control h-100"></textarea>
                </label>
              </div>
              <input type='hidden' form="formUpdateExpense" name='id', value=''>
            </div>
            
          </form>        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Отмена</button>
          <button type="submit" form="formUpdateExpense" class="btn btn-success btn-lg">Записать</button>
        </div>
      </div>
    </div>
  </div>