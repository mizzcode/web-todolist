<?php

namespace Mizz\AppsTodolist\Repository;

use Mizz\AppsTodolist\Entity\Users;
use PDO;

class UsersRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Users $user)
    {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$user->username, $user->password]);
    }

    public function deleteAll()
    {
        $sql = "DELETE FROM users";
        $this->connection->exec($sql);
    }
}
