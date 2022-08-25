
<?php
$data=postModel::getData();
foreach ($data as $datum) {
    echo "<a href=theme/index/?id=" . $datum['id'] . ">" . $datum['title'] . "<br></a>";

}
