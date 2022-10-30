<?php

function addTodoList(string $todo) {
    global $todolist;

    $number = sizeof($todolist) + 1;
    $todolist[$number] = $todo;
}