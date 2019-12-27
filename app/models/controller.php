<?php
  class Controller {
    public $Model;
    public $arrExpense;
    public $arrFilter;
    public $viewBuild;
      function __construct() {
        $this->$viewBuild = new View;
      }
  }