<?php

require_once __DIR__ . "/../Config/Database.php";
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Config\Database;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{
    $connection = Database::getConnection();
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl($connection));

    // $todolistService->addTodolist('BELAJAR LARAVEL');

    $todolistService->showTodolist();
}

function testAddTodolist()
{
    $connection = Database::getConnection();
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl($connection));

    $todolistService->addTodolist('BELAJAR PHP OOP');
    $todolistService->addTodolist('BELAJAR PHP WEB');
    $todolistService->addTodolist('BELAJAR PHP MVC');

    // $todolistService->showTodolist();
}

function testRemoveTodolist()
{
    $connection = Database::getConnection();
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl($connection));

    $todolistService->removeTodolist(5);
    $todolistService->removeTodolist(4);
    $todolistService->removeTodolist(3);
    $todolistService->removeTodolist(2);
    $todolistService->removeTodolist(1);
}

testShowTodolist();