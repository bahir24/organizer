<section class="hero">
  <div class="container">
    <button type="button" class="btn btn-success btn-lg btn-block mb-2" data-toggle="modal"
      data-target="#addExpense">Добавить запись</button>

          

    <div class="row">
        <div class="col-12">
          <h2 class="col__head mb-2 text-center">Последние записи</h2>

          <?php
          include 'app/views/table.php';
          ?>
      
      </div>
    </div>
  </div>
  <?php
    include 'app/views/form.php';
  ?>
</section>
<script src="/js/categoryButtons.js"></script>