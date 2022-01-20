<?php
require_once MODELS . "/helper/dbConnection.php";

function get(){
  // return "entra";
  $connection = conn();
  $query = $connection->prepare("SELECT e.id, e.name, e.email, g.name as 'gender', e.city, e.age, e.phone_number
  FROM employees e
  INNER JOIN genders g ON e.gender_id = g.id
  ORDER BY e.id ASC;");

try{
  $query->execute();
  $employees = $query->fetchAll();
  return $employees;
}catch (PDOException $e){
  return $e;
}
}

function getById($id){
}

function deleteById($id){
  // echo $id;
  $connection = conn();
  $query = $connection->prepare("DELETE FROM employees WHERE id = ".$id.";");
  // echo "hola";

  try{
    $query->execute();
    $employees = $query->fetchAll();
    return $employees;
  }catch (PDOException $e){
    return $e;
  }
}

// function updateEmployee($id){
//   $connection = conn();
//   $query = $connection->prepare("UPDATE employees SET name='$name' WHERE employees.id =".$id.";");
//   // echo "hola";

//   try{
//     $query->execute();
//     $employees = $query->fetchAll();
//     return $employees;
//   }catch (PDOException $e){
//     return $e;
//   }
// };

function createEmployee(){
  echo "createEmployee";

  $connection = conn();
  $query = $connection->prepare("INSERT INTO employees (name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code)
  VALUES ('salseo', 'asd', 'asd@gmail.com', '3', 'NULL', '21', '663593630', 'erer', 'rtrt', 'ffgg', '38320');");

try{
  $query->execute();
  $employees = $query->fetchAll();
  return $employees;
}catch (PDOException $e){
  return $e;
}

}