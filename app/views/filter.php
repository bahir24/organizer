<section class="filter">
  <div class="container">
    <div class="row filter-input mb-2">
      <h2 class="col-12 mb-2 text-center">Фильтр и сортировка</h2>
      <form class="filter" action="expenses" method="POST">
        <div class="row">
          <div class="col-2">
            <h6>По дате создания</h6>
            <div class="form-group">
              <input type="date" name="startCreateDate" class="form-control" id="startCreateDate"
                aria-describedby="emailHelp" placeholder="Начало">
            </div>
            <div class="form-group">
              <input type="date" name="endCreateDate" class="form-control" id="endCreateDate" placeholder="Конец">
            </div>
          </div>
          <div class="col-2">
            <h6>По дате изменения</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="startUpdateDate" aria-describedby="emailHelp"
                placeholder="Начало">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="endUpdateDate" placeholder="Конец">
            </div>
          </div>
          <div class="col-2">
            <h6>По принадлежности</h6>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="btn-group dropright w-100">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category" id="cathegoryBtn"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Категория
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Еда</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Хозяйственные расходы</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Одежда и обувь</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Регулярные платежи</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Авто</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Отдых</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Вредные привычки</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Крупные расходы</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
                <div class="btn-group dropright w-100">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category"
                    id="subCathegoryBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Подкатегория
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Еда</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Хозяйственные расходы</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Одежда и обувь</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Регулярные платежи</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Авто</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Отдых</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Вредные привычки</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Крупные расходы</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2">
            <h6>По цене</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="minPrice" aria-describedby="emailHelp" placeholder="От">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="maxPrice" placeholder="До">
            </div>
          </div>
          <div class="col-2">
            <h6>По количеству</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="minquantity" aria-describedby="emailHelp" placeholder="От">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="maxquantity" placeholder="До">
            </div>
          </div>
          <div class="col-2">
            <h6>По стоимости</h6>
            <div class="form-group">
              <input type="text" class="form-control" id="minSum" aria-describedby="emailHelp" placeholder="От">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="maxSum" placeholder="До">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Фильтровать</button>
      </form>
    </div>
    <div class="row">

     <?php
      $contentElem
      ?>

    </div>
  </div>
</section>