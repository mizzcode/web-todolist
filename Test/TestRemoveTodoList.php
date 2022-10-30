<?php

require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

addTodoList("Baca Al-Qur'an");
addTodoList("Belajar membuat todolist");
addTodoList("Belajar php dasar");
addTodoList("Belajar php oop");
showTodoList();

removeTodoList(4);
showTodoList();