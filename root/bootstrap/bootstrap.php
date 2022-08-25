<?php
$params = parse_ini_file(__DIR__.'\..\config.ini');
$db = new PDO($params['db.conn'],$params['db.user'],$params['db.pass']);


session_start();
require_once 'C:\wamp64\www\blog-test\root\src\core\route.php';
Route::start();