<?php

namespace App\Transport;

class Push extends AbstractTransport
{
    public function send(): void
    {
        if (null === $this->user->getName() || empty($this->user->getDeviceId())) {
            return;
        }

        echo sprintf(
            $this->message->getText(),
            $this->user->getName(),
            $this->user->getDeviceId(),
        );
    }
}
