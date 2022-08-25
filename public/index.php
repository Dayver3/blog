<?php
set_include_path('C:\wamp64\www\blog-test\src\application\controllers'.PATH_SEPARATOR.'C:\wamp64\www\blog-test\src\application\models'.PATH_SEPARATOR.'C:\wamp64\www\blog-test\root\src\application\views'.PATH_SEPARATOR.'C:\wamp64\www\blog-test\src\core');

const LOGIN = 'login';
function meu_autoloader($class){
    require_once("{$class}.php");

}
spl_autoload_register('meu_autoloader');
require_once 'C:\wamp64\www\blog-test\bootstrap\bootstrap.php';
?>

