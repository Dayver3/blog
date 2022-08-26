<?php

class Model
{
public function __construct($db){
    $params = parse_ini_file(__DIR__.'\..\config.ini');
    $db = new PDO($params['db.conn'],$params['db.user'],$params['db.pass']);

}
}