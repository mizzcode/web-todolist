<?php

namespace Config;

use PDO;

class Database
{
    static function getConnection(): PDO
    {
        $host = "localhost";
        $port = 3306;
        $database = "php_todolist";
        $username = "root";
        $password = "";

        return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    }
}
