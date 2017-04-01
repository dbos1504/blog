<?php

class Register_form
{
    private $reg_username;
    private $reg_email;
    private $reg_password;
    private $reg_password2;
    public function reg() {
        $this->reg_username = trim($_POST['reg_username']);
        $this->reg_email = trim($_POST['reg_email']);
        $this->reg_password = trim($_POST['reg_password']);
        $this->reg_password2 = trim($_POST['reg_password2']);
        $logType = 0;

        $this->reg_username = mysqli_real_escape_string(Database::$connection,$this->reg_username);
        $this->reg_email = mysqli_real_escape_string(Database::$connection,$this->reg_email);
        $this->reg_password = mysqli_real_escape_string(Database::$connection,$this->reg_password);
        $this->reg_password2 = mysqli_real_escape_string(Database::$connection,$this->reg_password2);

        if ($this->reg_password != $this->reg_password2) {
            echo "<p style='color: red;'>Password do not match !</p>";
        } else {
            $reg = Database::$connection->query("INSERT INTO login VALUES (null, '{$this->reg_username}', '{$this->reg_password}', '{$this->reg_password2}', {$logType}, '{$this->reg_email}')");
            if ($reg) {
                echo "<p style='color: green;'><b>Thank you. You can now log in</b> (Page will redirect you to home page in 2 sek.)</p>";
                header( "refresh:2;url=../../index.php" );
            } else
                echo "<p style='color: red;'>Something is wrong</p>";
        }
    }
}