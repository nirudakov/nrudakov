<?php

declare(strict_types=1);

namespace NRudakov\FirstComposerPackage;

class HelloProcessor
{
    public function getHello(): string
    {
        return 'Hello!';
    }

}