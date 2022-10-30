<?php

require_once "./BusinessLogic/ShowTodoList.php";
require_once "./Helper/Input.php";
require_once "./Model/TodoList.php";
require_once "./View/ViewAddTodoList.php";
require_once "./View/ViewRemoveTodoList.php";

function viewShowTodoList() {
    while(true) {
        showTodoList();

        echo "== MENU == \n";
        echo "1. Tambah Todo \n";
        echo "2. Hapus Todo \n";
        echo "x. Keluar \n";

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == 'x' || $pilihan == 'X') {
            break;
        } else {
            echo "Pilihan sulit dimengerti semoga harimu senin selalu \n";
        }


    }
    
    echo "Terima kasih sudah memakai apps todolist kami. Sayonaraa~~";

}