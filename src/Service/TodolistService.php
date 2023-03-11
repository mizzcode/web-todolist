<?php

namespace Mizz\AppsTodolist\Service;

use Mizz\AppsTodolist\Entity\Todolist;
use Mizz\AppsTodolist\Repository\TodolistRepository;

interface TodolistService
{
    function addTodolist(string $todo);

    function removeTodolist(int $number);

    function showTodolist();
}

class TodolistServiceImpl implements TodolistService
{
    private TodolistRepository $todolistRepository;

    public function __construct(TodolistRepository $todolistRepository)
    {
        $this->todolistRepository = $todolistRepository;
    }

    function showTodolist()
    {
        $todolist = $this->todolistRepository->findAll();

        echo "=== TODOLIST ===" . PHP_EOL;

        foreach ($todolist as $number => $value) {
            echo $value->getId() . ". " . $value->getTodo() . PHP_EOL;
        }
    }

    function addTodolist(string $todo)
    {
        $todolist = new Todolist($todo);
        $this->todolistRepository->save($todolist);
        echo "Berhasil Menambah Todo " . $todolist->getTodo() . PHP_EOL;
    }

    function removeTodolist(int $number)
    {
        if ($this->todolistRepository->remove($number)) {
            echo "Berhasil Menghapus Todo No $number" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo" . PHP_EOL;
        }
    }
}
