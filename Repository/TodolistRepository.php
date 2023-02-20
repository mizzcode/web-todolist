<?php

namespace Repository;

use Entity\Todolist;

interface TodolistRepository
{
    function save(Todolist $todolist);

    function remove(int $number): bool;

    function findAll(): array;
}

class TodolistRepositoryImpl implements TodolistRepository
{
    public array $todolist = [];

    function save(Todolist $todolist)
    {
        $number = sizeof($this->todolist) + 1;
        $this->todolist[$number] = $todolist;
    }

    function remove(int $number): bool
    {
        if ($number > sizeof($this->todolist)) {
            return false;
        }

        for ($i = $number; $i < sizeof($this->todolist); $i++) {
            $this->todolist[$i] = $this->todolist[$i + 1];
        }

        unset($this->todolist[sizeof($this->todolist)]);
        return true;
    }

    function findAll(): array
    {
        return $this->todolist;
    }
}
