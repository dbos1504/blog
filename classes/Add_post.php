<?php

class Add_post
{
    private $add_title;
    private $add_text;
    private $image;
    private $selCat;
    public function public_add__post() {
        $this->add_title = trim($_POST['add_title']);
        $this->add_text = trim($_POST['add_text']);
        $this->add_title = mysqli_real_escape_string(Database::$connection, $this->add_title);
        $this->add_text = mysqli_real_escape_string(Database::$connection, $this->add_text);

        $login_id = $_SESSION['user_id'];
        $this->selCat = $_POST['selCat'];

        $this->image = addslashes($_FILES['image']['name']);
        $target_dir = "public/images/";
        $target_file = $target_dir . basename($this->image);
        if (!file_exists("../".$target_file)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"],"../images/" . $this->image)) {
                echo "<p style='color: green;'>File uploaded</p>";
            } else
                echo "<p style='color: red;'>Something is wrong.</p>";
        } else
            echo "<p style='color: red;'>Sorry, file already exists.</p>";

        $resPo = Database::$connection->query("INSERT INTO blogs VALUES (null, '{$this->add_title}', '{$target_file}', '{$this->add_text}', {$this->selCat}, {$login_id}, CURDATE())");
        if ($resPo) {
            echo "<p style='color: green;'>Post added</p>";
            //header( "refresh:2;url=../../index.php" );
        } else
            echo "<p style='color: red;'>Something is wrong.</p>";

    }
}