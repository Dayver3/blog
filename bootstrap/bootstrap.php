<?php
    $params = parse_ini_file(__DIR__ . '\..\config.ini');
    $db = new PDO($params['db.conn'], $params['db.user'], $params['db.pass']);


    require_once 'C:\wamp64\www\blog-test\src\core\route.php';
    require_once 'C:\wamp64\www\blog-test\src\core\App.php';
    $rot = new route();
    App::init()->run();
