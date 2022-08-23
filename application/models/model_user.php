<?php

class model_user
{
    static function getData($login, $password)
    {
        global $db;
        $hash = ['password' => '', 0 => ''];
        $sql = "SELECT password FROM user WHERE login ='$login'";
        $result = $db->prepare($sql);
        $result->execute();
        $hash = $result->fetch();
        var_dump($hash);
        var_dump($password);
        var_dump($hash);
        if (is_array($hash)) {
            if (password_verify($password, $hash[0])) {
                $sql = "SELECT COUNT(login) FROM user WHERE login = '$login' AND password ='$password' ";
                $result = $db->prepare($sql);
                $result->execute();
                echo 'valid';
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    static function setData($login, $password, $nickname)
    {
        global $db;
        $sql = "SELECT COUNT(login) FROM user WHERE login = '$login'";
        $result = $db->prepare($sql);
        $result->execute();
        $true_user = $result->fetchColumn();
        if (!$true_user) {
            $sql = "INSERT INTO user (login,password,nickname) VALUES ('$login','$password','$nickname')";
            $result = $db->prepare($sql);
            $result->execute();
            return true;
        } else {
            return false;
        }
    }

    static function getNickname($login, $password)
    {
        global $db;
        $hash = ['password' => '', 0 => ''];
        $sql = "SELECT password FROM user WHERE login ='$login'";
        $result = $db->prepare($sql);
        $result->execute();
        $hash = $result->fetch();

        if (password_verify($password, $hash[0])) {
            $sql = "SELECT nickname FROM user WHERE login = '$login' ";
            $result = $db->prepare($sql);
            $result->execute();
            $nick = $result->fetchColumn();
            return $nick;
        } else {
            return false;
        }


    }

    static function isNickName($nickname)
    {
        global $db;
        $sql = "SELECT nickname FROM user WHERE nickname = '$nickname' ";
        $result = $db->prepare($sql);
        $result->execute();
        $true_user = $result->fetchColumn();
        var_dump($true_user);
        return $true_user;

    }

    static function isLogin($login)
    {
        global $db;
        $sql = "SELECT login FROM user WHERE login = '$login' ";
        $result = $db->prepare($sql);
        $result->execute();
        $true_user = $result->fetchColumn();
        return $true_user;
    }

}