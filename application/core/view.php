<?php

class View
{
    function generate($content_view,$template_view)
    {

        include 'application/views' . $template_view;
        include 'application/views/'.$content_view;
    }
}