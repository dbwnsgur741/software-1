<?php

// 에러표시
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Controller/Controller.php");

$controller = new Controller();
echo $controller->init();
 ?>
