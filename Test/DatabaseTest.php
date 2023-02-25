<?php

use Config\Database;

require_once __DIR__ . "/../Config/Database.php";

try {
    Database::getConnection();
    echo "Berhasil Terkoneksi ke Database";
} catch (PDOException $e) {
    echo "KONEKSI ERROR : " . $e->getMessage();
}