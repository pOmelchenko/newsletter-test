<?php

namespace App\Transport;

use App\Entity;
use App\Templates\Message;

abstract class AbstractTransport
{
    protected Entity\User $user;
    protected Message $message;

    /**
     * Email constructor.
     * @param Entity\User $user
     * @param Message $message
     */
    public function __construct(Entity\User $user, Message $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    abstract public function send(): void;
}
