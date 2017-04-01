<?php

class Login
{
    private $username;
    private $password;
    public function login_user() {
        $this->username = trim($_POST['username']);
        $this->password = trim($_POST['password']);

        $this->username = mysqli_real_escape_string(Database::$connection,$this->username);
        $this->password = mysqli_real_escape_string(Database::$connection,$this->password);

        $login_res = Database::$connection->query("SELECT * FROM login");
        while ($rw_log = $login_res->fetch_object('Cookies')) {
            if ($rw_log->username == $this->username && $rw_log->password == $this->password) {
                $rw_log->setCookies();
                header("Location: ../../index.php");
            }
        } echo "<p style='color: red;'>Wrong username or password</p>";
    }
}