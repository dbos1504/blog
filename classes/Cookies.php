<?php

class Cookies
{
    public function setCookies() {
        session_start();
        setcookie('user', 'username', 86800 + (60*60*60*24));
        $_SESSION['user_id'] = $this->id;
        $_SESSION['username'] = $this->username;
        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
    }
}