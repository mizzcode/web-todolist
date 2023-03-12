<?php

namespace Mizz\AppsTodolist\Service;

use Mizz\AppsTodolist\Entity\Todolist;
use Mizz\AppsTodolist\Repository\TodolistRepository;


class TodolistService
{
    private TodolistRepository $todolistRepository;

    public function __construct(TodolistRepository $todolistRepository)
    {
        $this->todolistRepository = $todolistRepository;
    }
}
