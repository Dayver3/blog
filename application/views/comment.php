<?php
$data = model_theme::getData();
var_dump($data);
$com_id=$_GET['com_id']
?>
<?php echo"<form action='/comment/comment/?id=$data->post_id&com_id=$com_id' method='post'>"?>
    Коментарий:<br/>
    <textarea name="comment" cols="50" rows="5"></textarea><br />
    <button type="submit">
        отправить
    </button>