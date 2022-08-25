<?php

class commentModel
{
    public static $datum;
    public static $finalArr =[];


    static function setComment()
    {
        global $db;
        $comment = $_POST['comment'];
        $post_id = $_GET['id'];
        $parents_com_id =$_GET['com_id'];
        $sql = "SELECT * FROM post WHERE post_id = '$post_id' ";
        $result = $db->prepare($sql);
        $result->execute();
        $commentData = $result->fetchObject();
        $dt=time();
        $user_id=userModel::getUserId();
        $sql = "INSERT INTO comment(user_id,parents_com_id,post_id,text_comment,time) VALUES ('$user_id','$parents_com_id','$commentData->post_id','$comment','$dt')";
        $result = $db->prepare($sql);
        $result->execute();

    }

    static function getCommentPost()
    {
        global $db;
        $post_id = $_GET['id'];
        $sql = "SELECT * FROM comment WHERE post_id = '$post_id' ";
        $result = $db->prepare($sql);
        $result->execute();
        $obj = $result->fetchAll(PDO::FETCH_OBJ);
        $data = [];
        foreach ($obj as $value) {
            $data[$value->parents_com_id][] = $value;
        }
        return $data;

    }

    static function getParentsId($parents_com_id)
    {
        global $db;
        $sql = "SELECT parents_com_id FROM comment WHERE parents_com_id = '$parents_com_id' ";
        $result = $db->prepare($sql);
        $result->execute();
        $obj = $result->fetchAll();
        return $obj;

    }

    static function getComment($parents_id, $level)
    {
        //var_dump(self::$datum[$parents_id]);
        if (isset(self::$datum[$parents_id]))
            foreach (self::$datum[$parents_id] as $value) {
                // echo "<form action='/comment/index/?id='.$data->post_id.'&parents_com_id='.'$datum->parents_com_id' method='post'>";
                $value->level = $level;
                self::$finalArr[] = $value;
                $level++;
                self::getComment($value->com_id, $level);
                $level--;

            }
        return self::$finalArr;
    }
    static function reSetCom(){
        global $db;
        $com_id= $_GET['id'];
        $comData=$_POST['comData'];
        $dt=time();
        global $db;
        $sql = "UPDATE comment SET text_comment='$comData',time='$dt' WHERE com_id='$com_id'";
        $result = $db->prepare($sql);
        $result->execute();
    }
    static function deleteCom(){
        $com_id= $_GET['com_id'];
        global $db;
        $dt=time();
        $sql = "UPDATE comment SET text_comment='коментарий удалён модерацией',time='$dt' WHERE com_id='$com_id'";
        $result = $db->prepare($sql);
        $result->execute();
    }

}