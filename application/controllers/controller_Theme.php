<?php

class controller_Theme extends Controller
{
function action_index(){
    $post_id = $_GET['id'];
    $this->view->generate('theme.php', '/template_view.php');
}
function action_poste(){

}

}