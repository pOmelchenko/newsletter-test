<?php

namespace App\Test\Repository;

use App\Repository\User;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testGetUsers(): void
    {
        $repository = new User();
        $users = $repository->getUsers();

        self::assertCount(7, $users);
    }
}
