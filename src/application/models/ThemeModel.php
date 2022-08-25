<?php

class themeModel
{
    static function getData(){
        global $db;
        $post_id = $_GET['id'];
        $sql = "SELECT * FROM post WHERE post_id = '$post_id' ";
        $result = $db->prepare($sql);
        $result->execute();
        $true_user = $result->fetchObject();
        return $true_user;
    }

}