<section class="all-expense">
  <div class="container">
    <div class="row filter-input">
      <h2 class="col-12 mb-2 text-center">Фильтр и сортировка</h2>
      <form class="filter" action="" method="POST" id="filterQuery" name="filter">
        <div class="row">
          <div class="col-3">
            <h6 class="mb-1">По дате создания</h6>
            <div class="form-group mb-1">
              <input type="date" form="filterQuery" name="startPurchaseDate" class="form-control form-control-sm" id="startPurchaseDate" value="<?php if ($this->arrFilter->startPurchaseDate) {
echo $this->arrFilter->startPurchaseDate;}?>">
            </div>
            <div class="form-group mb-1">
              <input type="date" form="filterQuery" name="endPurchaseDate" class="form-control form-control-sm" id="endPurchaseDate" value="<?php if($this->arrFilter->endPurchaseDate) {echo $this->arrFilter->endPurchaseDate;}?>">
            </div>
          </div>
          <div class="col-3">          
          </div>
          <div class="col-3">
            <h6 class="mb-1">По принадлежности</h6>
            <div class="form-group mb-1">
              <div class="input-group">
                <div class="btn-group dropright w-100 btn-group-category">
                  <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle btn-category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if ($this->arrFilter->categoryId) {
                      foreach ($this->arrCategories as $category) {
                        if ($category->id == $this->arrFilter->categoryId) {
                          echo $category->name;
                        }
                      }
                    } else {
                      echo "Категория";
                    }
                    ?>
                  </button>
                  <div class="dropdown-menu">
                    <?php
                      foreach ($this->arrCategories as $categoryName) {
                        echo "<button type='button' class='dropdown-item' data-id='$categoryName->id' onclick='changeHead(this);'>$categoryName->name</button>
                        <div class='dropdown-divider'></div>";
                      }
                    ?>
                  </div>
                  <input type='hidden' form="filterQuery" name="categoryId"
                    value="<?php echo $this->arrFilter->categoryId ?>">
                </div>
              </div>
            </div>
            <div class="form-group mb-1">
              <div class="input-group">
                <div class="btn-group dropright w-100 btn-group-subcategory">
                   <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle btn-category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php if(!$this->arrFilter->categoryId) echo 'disabled';?>
                   onclick="sortSubcategories(this.closest('.form-group').previousElementSibling.querySelector('.dropdown-menu').children[0])">
                    <?php if ($this->arrFilter->subcategoryId) {
                            foreach ($this->arrSubcategories as $subcategory) {
                              if ($subcategory->id == $this->arrFilter->subcategoryId) {
                                echo $subcategory->name;
                              }
                            }
                          } else {
                            echo "Подкатегория";
                          }
                    ?>

                  </button>
                  <div class="dropdown-menu">
                    <?php
                    
                      foreach ($this->arrSubcategories as $subcategoryName) {
                          echo "<button type='button' class='dropdown-item' data-id='$subcategoryName->id' data-category-id='$subcategoryName->categoryId' onclick='changeHeadSub(this)'>$subcategoryName->name</button>
                              <div class='dropdown-divider'></div>";
                      }
                    ?>
                  </div>
                  <input type='hidden' form="filterQuery" name="subcategoryId"
                    value="<?php echo $this->arrFilter->subcategoryId;?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-3">
            <h6 class="mb-1">По цене</h6>
            <div class="form-group mb-1">
              <input type="text" form="filterQuery" class="form-control form-control-sm" id="startPrice" placeholder="От" name="startPrice" value="<?php if ($this->arrFilter->startPrice) {echo $this->arrFilter->startPrice;}?>">
            </div>
            <div class="form-group mb-1">
              <input type="text" form="filterQuery" class="form-control form-control-sm" id="endPrice" placeholder="До" name="endPrice" value="<?php if($this->arrFilter->endPrice) {echo $this->arrFilter->endPrice;}?>">
            </div>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-4">
           <button type="reset" onclick="location.href = ''" form="filterQuery" class="btn btn-secondary btn-block">Сбросить фильры</button>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-success btn-block" data-toggle="modal"
              data-target="#addExpense">Добавить расход</button>
          </div>
          <div class="col-4">
            <button type="submit" form="filterQuery" class="btn btn-primary btn-block">Фильтровать</button>
          </div>
        </div>
        <input type='hidden' name='id' class='delButtonId'>
        <input type='hidden' name='order' class='order' value="<?php echo $this->arrFilter->order;?>">
        <input type='hidden' name='orderField' class='orderField' value="<?php echo $this->arrFilter->orderField;?>">
      </form>
      <?php
        include 'app/views/form.php';
        include 'app/views/formupdate.php';
      ?>
    </div>
    <div class="row table-wrapper">
      <?php
      include 'app/views/table.php';
    ?>
    </div>
  </div>
</section>