<?php

require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./Helper/Input.php";
require_once "./Model/TodoList.php";
require_once "./View/ViewShowTodoList.php";
require_once "./View/ViewAddTodoList.php";
require_once "./View/ViewRemoveTodoList.php";

echo "Aplikasi Todolist \n"; 

viewShowTodoList();