<?php
require "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    Database::$connection->query("DELETE FROM comments WHERE id = '$id'");
    header("Location: ../admin/admin.php?admin=remove_comments");
}