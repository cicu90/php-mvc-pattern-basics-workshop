<?php

//Creamos la conexión

function conn()
{
  try {
    $connection = "mysql:host=" . HOST . ";"
    . "dbname=" . DB . ";"
    . "charset=" . CHARSET . ";";

    // $options = [
    //   PDO::ATTR_ERRMODE          =>  PDO::ERRMODE_EXCEPTION,
    //   PDO::ATTR_EMULATE_PREPARES  =>  FALSE,
    // ];

    $pdo= new PDO($connection, USER, PASSWORD);

    return $pdo;
  }catch (PDOException $e){
    $errorMsg = "Error de DB";
    require_once(VIEWS . "/error/error.php");
  }
}