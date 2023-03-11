<?php


namespace Mizz\AppsTodolist\Repository;

use Mizz\AppsTodolist\Config\Database;
use Mizz\AppsTodolist\Entity\Todolist;
use Mizz\AppsTodolist\Entity\Users;
use PHPUnit\Framework\TestCase;

class TodolistRepositoryTest extends TestCase
{
    private UsersRepository $userRepository;
    private TodolistRepository $todolistRepository;

    protected function setUp(): void
    {
        $this->userRepository = new UsersRepository(Database::getConnection());
        $this->todolistRepository = new TodolistRepository(Database::getConnection());

        $this->todolistRepository->deleteAll();
        $this->userRepository->deleteAll();
    }

    function testSave()
    {
        $user = new Users;
        $user->username = 'mizz';
        $user->password = 'mizz';
        $this->userRepository->save($user);

        $todolist = new Todolist;
        $todolist->todo = 'Belajar PHP MVC';
        $todolist->id_user = $user->id_user;

        $this->todolistRepository->save($todolist);

        $result = $this->todolistRepository->findById($todolist->id_todo);

        self::assertEquals($user->id_user, $result->id_user);
    }
}
