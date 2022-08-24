<?php

class controller_Comment extends Controller
{
    function action_index()
    {

        $this->view->generate('comment.php', '/template_view.php');
    }

    function action_comment()
    {
        model_comment::setComment();
        echo "Спасибо за коментарий";
        $this->view->generate('mainpage.php', '/template_view.php');
    }

}