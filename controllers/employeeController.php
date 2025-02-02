<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

$action = "";

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}

if (function_exists($action)) {
    // call_user_func($action, $_REQUEST);
    $action();
    echo "Encuentra la Funcion";
} else {
    error("No encuentra la función");
}

/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    $employees = get(); //el cliente pide todos los empleados
    if (isset($employees)) {
        require_once VIEWS . "/employee/employeeDashboard.php";
    } else {
        error("there is a database error, try again");
    }
}
/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
}

function deleteEmployee(){

    if(isset($_REQUEST['confirm'])){
        deleteById($_GET["id"]);
        getAllEmployees();
    } else{
        require_once VIEWS . "delete/deleteEmployee.php";
    }
}

function showEmployees(){ // when you click on the create botom
    echo "ShoEmployees";

    require_once VIEWS . "employee/employee.php";
}

function addEmployee(){
    echo "addEmployee";
    $check = createEmployee();

    if(empty($check)){
        getAllEmployees();
        require_once VIEWS . "employee/employeeDashboard.php";
    }else {
        error($check);
    }

}
/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
