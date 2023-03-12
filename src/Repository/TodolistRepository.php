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
        $sql = "INSERT INTO todolist (todo) VALUES (?)";
        $statement = $this->connection->prepare($sql);

        $statement->execute([$todolist->todo]);
    }

    function findById(string $id): ?Todolist
    {
        $sql = "SELECT id, todo FROM todolist WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);

        $result = [];

        try {
            if ($row = $statement->fetch()) {
                $result[] = [
                    $todolist = new Todolist,
                    $todolist->id = $row['id'],
                    $todolist->todo = $row['todo']
                ];
                return $result;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    function deleteById(string $id)
    {
        $sql = "DELETE FROM todolist WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
    }

    function deleteAll()
    {
        $sql = "DELETE FROM todolist";
        $this->connection->exec($sql);
    }
}
