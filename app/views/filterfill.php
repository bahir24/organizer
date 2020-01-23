<section class="filter">
  <div class="container">
    <div class="row filter-input mb-2">
      <h2 class="col-12 mb-2 text-center">Фильтр и сортировка</h2>
      <form class="filter" action="" method="POST" id="filterQuery">
        <div class="row">
          <div class="col-3">
            <h6>По дате создания</h6>
            <div class="form-group">
              <input type="date" form="filterQuery" name="startPurchaseDate" class="form-control" id="startPurchaseDate"
                aria-describedby="emailHelp" placeholder="Начало"
                value="<?php if ($this->arrFilter->startPurchaseDate) {
    echo date("Y-m-d", $this->arrFilter->startPurchaseDate);
}?>">
            </div>
            <div class="form-group">
              <input type="date" form="filterQuery" name="endPurchaseDate" class="form-control" id="endPurchaseDate"
                placeholder="Конец"
                value="<?php if ($this->arrFilter->endPurchaseDate) {
    echo date("Y-m-d", $this->arrFilter->endPurchaseDate);
}?>">
            </div>
          </div>
          <div class="col-3">
            <h6>По дате изменения</h6>
            <div class="form-group">
              <input type="date" form="filterQuery" name="startUpdatedDate" class="form-control" id="startUpdateDate"
                aria-describedby="emailHelp" placeholder="Начало"
                value="<?php if ($this->arrFilter->startUpdatedDate) {
    echo date("Y-m-d", $this->arrFilter->startUpdatedDate);
}?>">
            </div>
            <div class="form-group">
              <input type="date" form="filterQuery" name="endUpdatedDate" class="form-control" id="endUpdateDate"
                placeholder="Конец"
                value="<?php if ($this->arrFilter->endUpdatedDate) {
    echo date("Y-m-d", $this->arrFilter->endUpdatedDate);
}?>">
            </div>
          </div>
          <div class="col-3">
            <h6>По принадлежности</h6>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="btn-group dropright w-100 btn-group-category">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                          echo "<button type='button' class='dropdown-item' data-id='$categoryName->id' onclick='changeHead(this)'>$categoryName->name</button>
                              <div class='dropdown-divider'></div>";
                      }
                    ?>
                  </div>
                  <input type='hidden' form="filterQuery" name="categoryId"
                    value="<?php echo $this->arrFilter->categoryId ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="btn-group dropright w-100 btn-group-subcategory">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
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
            <h6>По цене</h6>
            <div class="form-group">
              <input type="text" form="filterQuery" class="form-control" id="startPrice" aria-describedby="emailHelp"
                placeholder="От" name="startPrice"
                value="<?php if ($this->arrFilter->startPrice) {
                        echo $this->arrFilter->startPrice;
                    }?>">
            </div>
            <div class="form-group">
              <input type="text" form="filterQuery" class="form-control" id="endPrice" placeholder="До" name="endPrice"
                value="<?php if ($this->arrFilter->endPrice) {
                        echo $this->arrFilter->endPrice;
                    }?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="reset" onclick="location.href = ''" class="btn btn-secondary btn-lg btn-block">Сбросить
              фильры</button>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"
              data-target="#addExpense">Добавить расход</button>
          </div>
          <div class="col-4">
            <button type="submit" form="filterQuery" class="btn btn-primary btn-lg btn-block">Фильтровать</button>
          </div>
        </div>
        <input type='hidden' name='id' class='delButtonId'>
      </form>
      <?php
        include 'app/views/form.php';
        include 'app/views/formupdate.php';
      ?>
    </div>
    <div class="row">
      <?php
      $delButtonType = 'delbtnfilter';

      include 'app/views/table.php';
    ?>
    </div>
  </div>
</section>