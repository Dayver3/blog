<?php
set_include_path('C:\wamp64\www\blog-test\application\controllers'.PATH_SEPARATOR.'C:\wamp64\www\blog-test\application\models'.PATH_SEPARATOR.'C:\wamp64\www\blog-test\application\views'.PATH_SEPARATOR.'C:\wamp64\www\blog-test\application\core');

const LOGIN = 'login';
function meu_autoloader($class){
    require_once("{$class}.php");

}
spl_autoload_register('meu_autoloader');
require_once __DIR__.'\..\bootstrap\bootstrap.php';
?>

