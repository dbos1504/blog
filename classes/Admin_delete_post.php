<?php

class Admin_delete_post
{
    private $selblog;
    public function delete_post() {
        $this->selblog = $_POST['selblog'];
        $del = Database::$connection->query("DELETE FROM blogs WHERE id = '$this->selblog'");
        if ($del) {
            echo "<p>Post deleted</p>";
        } else
            echo "<p>Something is wrong.</p>";
    }
}