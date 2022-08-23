<?php

class controller_Login extends Controller
{
    function action_index()
    {


        $this->view->generate('login.php', '/template_view.php');

    }

    function action_log()
    {
        global $db;
        $login = $_POST["login"];
        $password = $_POST["password"];


        if (model_user::getData($login, $password)) {
            $nickname = model_user::getNickname($login, $password);
            $user = 'nickname';
                session_unset();
            $_SESSION['nickname']=$nickname;
            echo "nickname user = " . $_COOKIE["nickname"];
            var_dump($_COOKIE);
            var_dump($_SESSION);
            $this->view->generate('mainpage.php', '/template_view.php');
        } else {

            $this->view->generate('login.php', '/template_view.php');
            echo '<br/>Неправильный логин или пароль.<br/>';
        }

    }
}