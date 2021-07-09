<?php

namespace App\Templates\Push;

use App\Templates\Message;

class Standard implements Message
{
    /**
     * @return string
     */
    public function getText(): string
    {
        return 'Push notification has been sent to user {%s} with device_id {%s}' . PHP_EOL;
    }
}