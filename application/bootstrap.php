<?php
$params = parse_ini_file('config.ini');
$db = new PDO($params['db.conn'],$params['db.user'],$params['db.pass']);


session_start();
require_once 'core/route.php';
Route::start();