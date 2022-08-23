
<?php

$data =model_theme::getData();
$dt=$data->time;
$dt=date("Y-m-d H:i:s",$dt);

?>
<form action="/MainPageUser/mainPageUser" method="post">
    Тема:
    <?php echo "<br>".$data->title."<br>"?>
    Пост:
    <?php echo "<br>$data->text<br>"?>
    Время:
    <?php echo "<br>$dt<br>"?>
    <button type="submit">
        Коментировать
    </button>
