<?php

    set_include_path('C:\wamp64\www\blog-test\src\application\controllers' . PATH_SEPARATOR . 'C:\wamp64\www\blog-test\src\application\models' . PATH_SEPARATOR . 'C:\wamp64\www\blog-test\root\src\application\views' . PATH_SEPARATOR . 'C:\wamp64\www\blog-test\src\core');
    const LOGIN = 'login';
    function autoloader($class)
    {
        var_dump("{$class}.php");
        require_once("{$class}.php");
    }

    spl_autoload_register('autoloader');
    require_once 'C:\wamp64\www\blog-test\bootstrap\bootstrap.php';

?>
