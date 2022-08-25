<?php

class Model
{

public function dbConection(){
    $params = parse_ini_file(__DIR__.'\..\config.ini');
    $db = new PDO($params['db.conn'],$params['db.user'],$params['db.pass']);
return $db;
}
}