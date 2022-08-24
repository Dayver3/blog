<?php

class View
{
    function generate($content_view,$template_view)
    {

        include 'C:\wamp64\www\blog-test\application\views' . $template_view;
        include 'C:\wamp64\www\blog-test\application\views/'.$content_view;
    }
}