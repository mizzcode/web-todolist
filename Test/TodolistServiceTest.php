<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl);

    $todolistService->showTodolist();
}
// testShowTodolist();

function testAddTodolist()
{
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl);

    $todolistService->addTodolist('BELAJAR PHP OOP');
    $todolistService->addTodolist('BELAJAR PHP WEB');
    $todolistService->addTodolist('BELAJAR PHP MVC');

    $todolistService->showTodolist();
}
// testAddTodolist();

function testRemoveTodolist()
{
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl);

    $todolistService->addTodolist('BELAJAR PHP OOP');
    $todolistService->addTodolist('BELAJAR PHP WEB');
    $todolistService->addTodolist('BELAJAR PHP MVC');

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);

    $todolistService->showTodolist();
}
testRemoveTodolist();
