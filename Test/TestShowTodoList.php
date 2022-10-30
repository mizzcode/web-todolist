<?php

require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

addTodoList("Learn PHP - Dasar");
addTodoList("Learn PHP - OOP");
addTodoList("Learn PHP - MVC");
showTodoList();