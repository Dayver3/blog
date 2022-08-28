<?php

class RegistrationController extends Controller
{
    function indexAction()
    {

        $this->view->generate('registration.php', '/template_view.php');
    }

    function registrationAction()
    {
        global $db;
        $login = $_POST["login"];
        $password = $_POST["password"];
        $password = password_hash($password, PASSWORD_BCRYPT);
        $nickname = $_POST["nickname"];
        if (userModel::isLogin($login)===$login) {
            echo '<br/>Такой логин есть, выберите другой';
            $this->view->generate('registration.php', '/template_view.php');
            var_dump(userModel::isNickName($nickname));
        } elseif (userModel::isNickName($nickname)===$nickname) {
            echo '<br/>Такой ник занят, выберите другой';
            $this->view->generate('registration.php', '/template_view.php');
        } else {
            $new_user = userModel::setData($login, $password, $nickname);
            $this->view->generate('mainpage.php', '/template_view.php');
        }

        // $this->view->generate('login.php', '/template_view.php');
        return 1;
    }
}