<?php
$data = model_theme::getData();
$dt = $data->time;
$dt = date("Y-m-d H:i:s", $dt);
$datum = model_comment::getComment(0,0);
$level = 0;
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
foreach ($datum as $value) {
    echo"<form action='/comment/index/?id=$data->post_id&com_id=$value->com_id'method='post'>";
    echo"<div style='margin-left:" . ($value->parents_com_id * 25) . "px;'>" . $value->text_comment . "</div>";
    echo "<button type='submit'>коментировать</button></form>";
}
?>