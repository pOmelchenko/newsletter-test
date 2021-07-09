<?php

namespace App\Templates\Email;

use App\Templates\Message;

class Standard implements Message
{
    /**
     * @return string
     */
    public function getText(): string
    {
        return 'Email {%s} has been sent to user {%s}' . PHP_EOL;
    }
}