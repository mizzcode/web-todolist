<?php

require_once "./Helper/Input.php";
require_once "./BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList() {
    echo "=== MENGHAPUS TODO ===" . PHP_EOL;

    $pilih = input("Pilih Nomor Yang ingin Di Hapus (x untuk membatalkan)");

    if ($pilih == 'x') {
        echo "Anda Membatalkan Menghapus Todo \n";
    } else {
        $sukses = removeTodoList($pilih);
        echo "Anda sukses menghapus todo nomor $pilih \n";
    }
}