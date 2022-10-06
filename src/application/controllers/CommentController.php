<?php

class CommentController extends Controller
{
    function indexAction()
    {

        $this->view->generate('comment.php', '/template_view.php');
    }

    function commentAction()
    {
        commentModel::setComment();
        echo "Спасибо за коментарий";
        $this->view->generate('homepage.php', '/template_view.php');
    }

    function changeAction()
    {
        $this->view->generate('refactor_comment.php', '/template_view.php');
    }

    function changeComAction()
    {
        commentModel::reSetCom();
        $this->view->generate('homepage.php', '/template_view.php');
    }
    function deleteAction()
    {
        
        commentModel::deleteCom();
        $this->view->generate('homepage.php', '/template_view.php');
    }
}
