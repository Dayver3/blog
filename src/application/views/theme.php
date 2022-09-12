<?php
$data = themeModel::getData();
$dt = $data->time;
$dt = date("Y-m-d H:i:s", $dt);
$datum = commentModel::getComment(0,0);
?>
</form>
Тема:
<?php echo "<br>" . $data->title . "<br>" ?>
Пост:
<?php echo "<br>$data->text<br>" ?>
Время:
<?php echo "<br>$dt<br>" ?>
<?php
echo"<form action='/comment/index/?id=$data->post_id&com_id=0'method='post'></post>";
echo "<button type='submit'>коментировать</button></form>";
if(userModel::levelAccess()){
    echo"<form action='/theme/change/?id=$data->post_id'method='post'></post>";
    echo "<button type='submit'>изменить</button></form>";
}
foreach ($datum as $value) {
    $userId=userModel::getUserFromId($value->user_id);
    echo"<form action='/comment/index/?id=$data->post_id&com_id=$value->com_id'method='post'>";
    echo"<div style='margin-left:" . ($value->level * 25) . "px;'>" . $value->text_comment ." by ".$userId.  "</div>";
    echo "<button type='submit'>коментировать</button></form>";
    if(userModel::levelAccess()){
        echo"<form action='/comment/change/?com_id=$value->com_id'method='post'></form>";
        echo "<button type='submit'>изменить</button></form>";
        echo"<form action='/comment/delete/?com_id=$value->com_id'method='post'></form>>";
        echo "<button type='submit'>удалить</button></form>";
    }
}
?>