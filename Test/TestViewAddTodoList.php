<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./View/ViewAddTodoList.php";

addTodoList("Learn PHP - Dasar");
addTodoList("Learn PHP - OOP");
addTodoList("Learn PHP - MVC");
showTodoList();

viewAddTodoList();
showTodoList();

viewAddTodoList();
showTodoList();