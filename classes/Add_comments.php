<?php

class Add_comments
{
    private $add_name;
    private $add_comment;
    public function add_com() {
        $this->add_name = trim($_POST['add_name']);
        $this->add_comment = trim($_POST['add_comment']);

        $this->add_name = mysqli_real_escape_string(Database::$connection, $this->add_name);
        $this->add_comment = mysqli_real_escape_string(Database::$connection, $this->add_comment);

        $login_id = $_SESSION['user_id'];
        $blog_id = $_GET['id'];

        $addRes = Database::$connection->query("INSERT INTO comments VALUES (null, '{$this->add_name}', '{$this->add_comment}', {$blog_id}, {$login_id}),CURDATE()");
        if ($addRes) {
            echo "<p style='color: green;'>Comment added, thank you</p>";
        } else
            echo "<p style='color: red;'>Something is wrong</p>";
    }
}