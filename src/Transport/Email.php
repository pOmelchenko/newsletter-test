<?php

namespace App\Transport;

class Email extends AbstractTransport
{
    public function send(): void
    {
        if (null === $this->user->getName() || null === $this->user->getEmail()) {
            return;
        }

        echo sprintf(
            $this->message->getText(),
            $this->user->getEmail(),
            $this->user->getName(),
        );
    }
}