<?php
$id = isset($_SESSION['user_id']);
$user_id = Database::$connection->query("SELECT * FROM login WHERE id = '$id'");
$user = $user_id->fetch_object('Cookies');