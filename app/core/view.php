<?php
  class View {
    // public $pageTemplate = "app/views/layout.php";
    
    public function __construct() {
      

    // echo $pageTemplate;  
    }

    function halfPageBuild($pageLayout, $sectionFeatures, $varContent, $arrExpenses) {
      if(($arrExpenses) && is_array($arrExpenses)) {  
      ob_start(); 
      include 'app/views/'.$varContent.'.php';
      return ob_get_clean();
      } else {
      echo 'что-то пошло не так'; //TO DO
      }
    }

    function halfPageShow($pageLayout, $sectionFeatures, $varContent, $arrExpenses) {     
      include 'app/views/layout.php';
      
    }

    // function pageBuild($pageLayout, $sectionFeatures, $varContent, $arrExpenses) {
    //   ob_start();
    //   $contentElem = $this->halfPageShow($pageLayout, $sectionFeatures, $varContent, $arrExpenses);
    //   $page = include 'app/views/'.$sectionFeatures.'.php';
    //   return ob_get_clean();
    //   // return $page;
    // }

    // function pageShow($pageLayout, $sectionFeatures, $varContent, $arrExpenses) {
      // echo $this->pageBuild($pageLayout, $sectionFeatures, $varContent, $arrExpenses);
      // $sectionSpecify = $this->pageBuild($pageLayout, $sectionFeatures, $varContent, $arrExpenses);
// echo $sectionSpecify;
      // $renderr = file_get_contents('app/views/'.$pageLayout.'.php');
      
    // }
  }

    // function fetch($pageLayout, $sectionFeatures, $varContent, $arrExpenses) {
    //   $contentElem = 
    // }

      // $sectionSpecify = file_get_contents('app/views/'.$sectionFeatures.'.php');
      // include 'app/views/'.$pageLayout.'.php';   
      
      // ob_start();
      // $contentElem = file_get_contents('app/views/'.$varContent.'.php');
      // include $halfPage;
      // $allPage = ob_get_clean();
      
      // return $halfPage;

        
        //$expenseTable = "//заполняем ячейки таблицы значениями из массива + ...";
     

      // ob_start();
      // include 'path/'.$Pagelayout.'.php';
      // return ob_get_clean();
    
    
    
    // }
    //отправляем шаблон в браузер
    
    //
  // }

  //  protected $data; 
  //  protected $path; 
  //  protected static function getDefaultViewPath() { 
  //    $router = App::getRouter(); 
  //    if(!$router) { 
  //      return false; 
  //   } 
  //   $controller_path = $router->getController(); 
  //   $method_path = ($router->getMethodPrefix() !== "" ? $router->getMethodPrefix() . '_' : '') . $router->getAction(); 
  //   return ROOT . "/views/" . $controller_path . "/" . $method_path . ".phtml"; 
  // } 
  // public function __construct($data = array(), $path = null) { 
  //   if(!$path){ 
  //     //default $path = $this->getDefaultViewPath(); 
  //   } 
  //   if(!file_exists($path)){ 
  //     throw new Exception("Error view file!"); 
  //   } 
  //   $this->data = $data; 
  //   $this->path = $path; 
  // } 
  // public function render(){ 
  //   $data = $this->data; 
  //   ob_start(); 
  //   include ($this->path); 
  //   $content = ob_get_clean(); 
  //   return $content; } 


  