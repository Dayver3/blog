<?php
set_include_path(__DIR__.'\application\controllers'.PATH_SEPARATOR.__DIR__.'\application\models'.PATH_SEPARATOR.__DIR__.'\application\views'.PATH_SEPARATOR.__DIR__.'\application\core');
const LOGIN = 'login';
function meu_autoloader($class){
    require_once("{$class}.php");

}
spl_autoload_register('meu_autoloader');
require_once 'application/bootstrap.php';
?>

