<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./Helper/Input.php";

function viewAddTodoList() {
     echo "=== MENAMBAH TODO ===" . PHP_EOL;

    $todo = input("Masukkan Todo (x untuk membatalkan)");

    if ($todo == 'x' || $todo == 'X') {
        echo "Andaa membatalkan menambah todo";
    } else {
        addTodoList($todo);
        echo "Sukses menambahkan Todo \n";
    }

}