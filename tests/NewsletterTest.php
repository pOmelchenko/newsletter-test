<?php

namespace App\Test;

use App\Newsletter;
use App\Repository;
use App\Transport;
use PHPUnit\Framework\TestCase;

class NewsletterTest extends TestCase
{
    public function testSend(): void
    {
        $newsletter = new Newsletter(
            [
                Transport\Email::class,
                Transport\Push::class,
            ],
            new Repository\User(),
        );

        $newsletter->send();
    }
}
