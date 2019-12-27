
  //неизменяемая часть страницы. TO DO настроить динамическую подстановку разной разметки в зависимости от страницы
  <!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/daterangepicker.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <title>Organizer</title>
</head>
<body>  
  <header class="header">
    <div class="container">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link active" href="#">Добавить расход</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report.html">Отчет</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Все раходы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Настройка</a>
        </li>
      </ul>
    </div>
  </header>
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h2 class="col__head mb-5">Добавить запись</h2>
          <form>
            <div class="form-group">             
              <div class="input-group mb-2">
                <label class="streched">                  
                  <div class="btn-group dropright w-100">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle btn-category" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
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
                </label>
              </div>             
              <div class="input-group mb-2">
                <label class="streched">                  
                  <div class="btn-group dropright w-100">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle btn-subcategory" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Подкатегория
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </label>
              </div>
              <div class="input-group mb-2">
                <label class="streched">
                  <h6 class="mb-1">Дата</h6>
                  <input type="text" class="form-control expense-day">
                </label>
              </div>
              <div class="input-group mb-2">
                <label class="streched">
                  <h6 class="mb-1">Стоимость</h6>
                  <div class="d-flex">
                    <input type="text" class="form-control input-calc">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary btn-calc" type="button">
                        <img src="/img/calc.svg" class="icon" alt="calc">
                      </button>
                    </div>
                  </div>
                </label>                  
              </div>                                      
              <div class="input-group mb-5">
                <label class="streched">
                  <h6 class="mb-1">Примечание</h6>
                  <textarea class="form-control expense-comment"></textarea>
                </label>
              </div>
              <button type="button" class="btn btn-success btn-block">Success</button>
            </div>
          </form>
        </div>
        <div class="offset-md-1 col-8">
          <h2 class="col__head mb-5 text-right">Последние записи</h2>
            <?php 
            //Таблица
            ?>
          </div>
      </div>
    </div>
  </section>
  
  <script src="/js/jquery.slim.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/moment.min.js"></script>
  <script src="/js/knockout.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>