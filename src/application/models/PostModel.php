<?php

class postModel extends Model
{
    static function getUserId()
    {
        global $db;
        $nickname = $_SESSION['nickname'];
        $sql = "SELECT user_id FROM user WHERE nickname ='$nickname'";
        $result = $db->prepare($sql);
        $result->execute();
        $idUser = $result->fetchColumn();
        return $idUser;
    }

    static function setPost($userId, $dt, $postData, $title)
    {
        global $db;
        $sql = "INSERT INTO post(user_id,text,time,title) VALUES ('$userId','$postData','$dt','$title')";
        $result = $db->prepare($sql);
        $result->execute();
        return true;

    }

    static function getData()
    {
        global $db;
        $sql = "SELECT COUNT(post_id) FROM post";
        $result = $db->prepare($sql);
        $result->execute();
        $count = $result->fetchColumn();
        $data = [['id'=>''],['title'=>'']];
        for ($i = 1; $i <= $count; ++$i) {
            $sql = "SELECT title FROM post WHERE post_id='$i'";
            $result = $db->prepare($sql);
            $result->execute();
            $text = $result->fetchColumn();
            $data[$i-1]['id']=$i;
            $data[$i-1]['title'] = $text;
        }
        return $data;
    }
    static function reSetPost(){
        $id= $_GET['id'];
        $title=$_POST['title'];
        $postData=$_POST['postData'];
        $dt=time();
        global $db;
        $sql = "UPDATE post SET title='$title',text='$postData',time='$dt' WHERE post_id='$id'";
        $result = $db->prepare($sql);
        $result->execute();
    }

}