<?php

class Database
{
    static $connection;
    public static function connect() {
        self::$connection = new mysqli('localhost', 'root', '', 'blog');
        if (!self::$connection) {
            die("Database error");
        }
    }
}