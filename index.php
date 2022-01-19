<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

include_once "config/constants.php";
require_once("config/db.php");


if(isset($_GET['controller'])){
  $controller = getControllerPatch($_GET['controller']);
  // echo $controller;
  $fileExists = file_exists($controller);
  if($fileExists) {
    require_once $controller;
  } else {
    $errorMsg = " el controlador no existe"; //se puede aprovechar para cualquier parte de la web
    require_once VIEWS . "error/error.php";
  }
}else {
    require_once VIEWS . "main/main.php";
  }



function getControllerPatch($controller): string
{
  return CONTROLLERS . $controller . "Controller.php";
}
