<?php

namespace App\Repository;

use App\Entity;

class User
{
    /**
     * @var array<array{name?: string, email?: string, device_id?: string}>
     */
    private array $users = [
        [
            'name' => 'Ivan',
            'email' => 'ivan@test.com',
            'device_id' => 'Ks[dqweer4'
        ],
        [
            'name' => 'Peter',
            'email' => 'peter@test.com',
        ],
        [
            'name' => 'Mark',
            'device_id' => 'Ks[dqweer4'
        ],
        [
            'name' => 'Nina',
            'email' => '...',
        ],
        [
            'name' => 'Luke',
            'device_id' => 'vfehlfg43g'
        ],
        [
            'name' => 'Zerg',
            'device_id' => ''
        ],
        [
            'email' => '...',
            'device_id' => '',
        ]
    ];

    /**
     * @return array<Entity\User>
     */
    public function getUsers(): array
    {
        return array_map(
            static fn (array $user) =>
            new Entity\User(
                name: $user['name'] ?? null,
                email: $user['email'] ?? null,
                device_id: $user['device_id'] ?? null,
            ),
            $this->users
        );
    }
}