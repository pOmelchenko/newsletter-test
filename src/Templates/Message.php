<?php

namespace App\Templates;

interface Message
{
    public const STANDARD = 'Standard';

    public function getText(): string;
}