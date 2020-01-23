 <form class='d-inline-block' action='main/delete' method='POST'>
  <input type='hidden' name='id' value="<?php echo $row->id ?>">
  <button type='submit' class='btn btn-outline-danger btn-sm py-0 px-1'>
  <img src='/img/exit.svg' class='icon' alt='delete'>
  </button>
</form>