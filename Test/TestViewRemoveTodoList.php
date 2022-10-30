<?php

require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./View/ViewRemoveTodoList.php";

addTodoList("UPDATE SKCK YANG MATI");
addTodoList("PRINT FOTO 4X6");
addTodoList("BANGUN PAGI");
showTodoList();

viewRemoveTodoList();
showTodoList();