<?php


class Admin_add_post
{
    private $admin_add_title;
    private $admin_add_text;
    private $image;
    private $selCat;
    public function admin_post() {
        $this->admin_add_title = $_POST['admin_add_title'];
        $this->admin_add_text = $_POST['admin_add_text'];

        $this->admin_add_title = mysqli_real_escape_string(Database::$connection, $this->admin_add_title);
        $this->admin_add_text = mysqli_real_escape_string(Database::$connection, $this->admin_add_text);

        $login_id = 3;
        $this->selCat = $_POST['selCat'];

        $this->image = addslashes($_FILES['image']['name']);
        $target_dir = "public/images/";
        $target_file = $target_dir . basename($this->image);
        if (!file_exists("../".$target_file)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../" . $target_file)) {
                echo "<p style='color: green;'>File uploaded</p>";
            } else
                echo "<p style='color: red;'>Something is wrong.</p>";
        } else
            echo "<p style='color: red;'>Sorry, file already exists.</p>";

        $redPo = Database::$connection->query("INSERT INTO blogs VALUES (null, '{$this->admin_add_title}', '{$target_file}', '{$this->admin_add_text}', {$this->selCat}, '{$login_id}', CURDATE())");
            if ($redPo) {
                echo "<p style='color: green;'>Post added</p>";
            } else
                echo "<p style='color: red;'>Something is wrong.</p>";
    }
}