<?php

class View
{
    function generate($content_view,$template_view,$errMsg=null)
    {
        if($errMsg){
            echo"<br>".$errMsg."<br>";
}
        include 'C:\wamp64\www\blog-test\src\application\views' . $template_view;
        include 'C:\wamp64\www\blog-test\src\application\views/'.$content_view;

    }
}