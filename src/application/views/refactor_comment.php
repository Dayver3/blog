<?php
$id=commentModel::getFromGET('com_id');
echo"<form action='/comment/changeCom/?id= $id' method='post'>";
?>
Текст коментария:<br/>
<textarea name="comData" cols="50" rows="5"></textarea><br />
<button type="submit">
   изменить
</button>