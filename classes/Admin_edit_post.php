<?php

class Admin_edit_post
{
    private $admin_add_title;
    private $admin_add_text;
    private $image;
    private $selBlog;
    public function admin_edit() {
        $this->admin_add_title = $_POST['admin_add_title'];
        $this->admin_add_text = $_POST['admin_add_text'];
        $this->selBlog = $_POST['selblog'];
        $this->image = addslashes($_FILES['image']['name']);
        $target_dir = "public/images/";
        $target_file = $target_dir . basename($this->image);
            if (file_exists("../" . $target_file)) {
                echo "<p style='color: red;'>Sorry, file already exists.</p>";
            } else
                 move_uploaded_file($_FILES["image"]["tmp_name"], "../" . $target_file);
        $editPost = Database::$connection->query("UPDATE blogs SET blog_name = '{$this->admin_add_title}', blog_image = '{$target_file}', blog_text = '{$this->admin_add_text}' WHERE id = '{$this->selBlog}'");
        if ($editPost) {
            echo "<p style='color: green;'>Post edited</p>";
        } else
            echo "<p style='color: red;'>Something is wrong.</p>";
    }
}