<?php

namespace Mizz\AppsTodolist\Repository;

use Mizz\AppsTodolist\Entity\Todolist;
use PDO;


class TodolistRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    function save(Todolist $todolist)
    {
        $sql = "INSERT INTO todolist (todo, id_user) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);

        $statement->execute([$todolist->todo, $todolist->id_user]);
    }

    function remove(int $number): bool
    {
        $sql = "SELECT id_todo FROM todolist WHERE id_todo = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        if ($statement->fetch()) {
            // kalau data nya ada 
            $sql = "DELETE FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);
            return true;
        } else {
            // kalau data gak ada return false
            return false;
        }
    }

    function findById(string $id_todo): ?Todolist
    {
        $sql = "SELECT id_todo, todo, id_user FROM todolist WHERE id_todo = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id_todo]);

        try {
            if ($row = $statement->fetch()) {
                $todolist = new Todolist;
                $todolist->id_todo = $row['id_todo'];
                $todolist->todo = $row['todo'];
                $todolist->id_user = $row['id_user'];
                return $todolist;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    function deleteAll()
    {
        $sql = "DELETE FROM todolist";
        $this->connection->exec($sql);
    }
}
