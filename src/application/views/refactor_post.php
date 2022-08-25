<?php
$id=$_GET['id'];
 echo"<form action='/theme/changePost/?id= $id' method='post'>";
?>
Название:<br/>
<input type="text" name="title"/><br/>
Текст поста:<br/>
<textarea name="postData" cols="50" rows="5"></textarea><br />
<button type="submit">
    push
</button>