<?php

namespace Entity;

class Todolist
{
    private string $todo;

    public function __construct(string $todo)
    {
        $this->todo = $todo;
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
