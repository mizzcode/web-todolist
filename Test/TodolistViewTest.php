<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../View/TodolistView.php";


use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistView->viewShowTodolist();
}
// testViewShowTodolist();

function testViewAddTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistView->viewAddTodolist();

    $todolistService->showTodolist();
}
// testViewAddTodolist();

function testViewRemoveTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist('Test Hapus Bug');
    $todolistService->addTodolist('Test Hapus Todo');
    $todolistService->addTodolist('Test Hapus Buuku');

    $todolistService->showTodolist();

    $todolistView->viewRemoveTodolist();

    $todolistService->showTodolist();
}
testViewRemoveTodolist();
