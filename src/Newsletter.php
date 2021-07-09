<?php

namespace App;

use App\Repository;
use App\Templates\Message;
use App\Transport\AbstractTransport;

class Newsletter
{
    private array $transports;
    private Repository\User $repository;

    public function __construct(array $transports, Repository\User $repository)
    {
        $this->transports = $transports;
        $this->repository = $repository;
    }

    public function send(): void
    {
        foreach ($this->repository->getUsers() as $user) {
            /** @var class-string $transport */
            foreach ($this->transports as $transport) {
                if (null === $user->getName()) {
                    continue;
                }

                $this->transportFactory($transport, $user)->send();
            }
        }
    }

    /**
     * @param class-string $transport
     * @param Entity\User $user
     * @param string $template
     * @return AbstractTransport
     */
    private function transportFactory(
        string $transport,
        Entity\User $user,
        string $template = Message::STANDARD
    ): AbstractTransport
    {
        $template = '\\' . str_replace('Transport', 'Templates', $transport) . '\\' . $template;

        return new $transport($user, new $template());
    }
}