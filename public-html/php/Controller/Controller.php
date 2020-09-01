<?php

class Controller{
  public $conn = null;

  public function __construct(){
    $this->dbConnect();
  }

  private function dbConnect(){

    $db_sn = "db";
    $db_un = "user";
    $db_pw = "test";
    $db_nm = "myDb";

    $this->conn = new mysqli($db_sn,$db_un,$db_pw,$db_nm);
  }

  public function init(){

    $model = $this->loadModel('Process');
    $process = $_GET['process'];
    echo $process;
    switch($process){
        case 'inputUser':
            return $model->inputUser() ? 200 : 500;
        case 'deleteUser':
            return $model->deleteUser() ? 200 : 500;
        case 'updateUser':
            return $model->updateUser() ? 200 : 500;
    }
    
  }

  public function loadModel(string $model_name = null){

    if(!$model_name){
      return false;
    }

    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Model/Model.php");

    $model_name.= "Model";

    return new $model_name($this->conn);
  }

}

?>
