<?php

class Message
{
    private $ct_name;
    private $ct_email;
    private $ct_message;
    public function add_message() {
        $this->ct_name = trim($_POST['ct_name']);
        $this->ct_email = trim($_POST['ct_email']);
        $this->ct_message = trim($_POST['ct_message']);

        $this->ct_name = mysqli_real_escape_string(Database::$connection, $this->ct_name);
        $this->ct_email = mysqli_real_escape_string(Database::$connection, $this->ct_email);
        $this->ct_message = mysqli_real_escape_string(Database::$connection, $this->ct_message);

        $message = Database::$connection->query("INSERT INTO contact VALUES (null, '{$this->ct_name}', '{$this->ct_email}', '{$this->ct_message}')");

        if ($message) {
            echo "<p style='color: green;'>Thank you for your message.</p>";
        } else
            echo "<p style='color: red;'>Something is wrong</p>";
    }
}