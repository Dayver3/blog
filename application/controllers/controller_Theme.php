<?php

class controller_Theme extends Controller
{
function action_index(){
    $post_id = $_GET['id'];
    model_comment::$datum =model_comment::getCommentPost();
    $this->view->generate('theme.php', '/template_view.php');
}
function action_theme(){
    $post_id = $_GET['id'];
    model_comment::$datum =model_comment::getCommentPost();
    $this->view->generate('theme.php', '/template_view.php');
}

}