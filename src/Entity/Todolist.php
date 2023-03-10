<?php

namespace Entity;

class Todolist
{
    private int $id;
    private string $todo;

    public function __construct(string $todo = "")
    {
        $this->todo = $todo;
    }

    function getId(): int
    {
        return $this->id;
    }

    function setId(int $id): void
    {
        $this->id = $id;
    }

    function getTodo(): string
    {
        return $this->todo;
    }

    function setTodo(string $todo): void
    {
        $this->todo = $todo;
    }
}