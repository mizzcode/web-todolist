<?php

namespace View;

use Helper\InputHelper;
use Service\TodolistService;

class TodolistView
{
    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    function viewShowTodolist()
    {
        while (true) {
            $this->todolistService->showTodolist();

            echo "=== MENU ===" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "X. Keluar" . PHP_EOL;

            $input = InputHelper::Input('Pilih');

            if ($input == '1') {
                $this->viewAddTodoList();
            } else if ($input == '2') {
                $this->viewRemoveTodoList();
            } else if ($input == 'x' || $input == 'X') {
                break;
            } else {
                echo "Pilihan sulit dimengerti. Semoga harimu menyenangkan" . PHP_EOL;
            }
        }
        echo "SAYONARAA ~~" . PHP_EOL;
    }

    function viewAddTodolist()
    {
        echo "=== TAMBAH TODO BARU ===" . PHP_EOL;

        $todo = InputHelper::Input('Masukkan Todo Baru (x untuk batal)');

        if ($todo == 'x' || $todo == 'X') {
            echo "Kamu Membatalkan Menambah Todo" . PHP_EOL;
        } else {
            $this->todolistService->addTodolist($todo);
        }
    }

    function viewRemoveTodolist()
    {
        echo "=== HAPUS TODO ===" . PHP_EOL;

        $number = InputHelper::Input('Masukkan Nomor (x untuk batal)');

        if ($number == 'x' || $number == 'X') {
            echo "Kamu Membatalkan Menghapus Todo" . PHP_EOL;
        } else {
            $this->todolistService->removeTodolist($number);
        }
    }
}
