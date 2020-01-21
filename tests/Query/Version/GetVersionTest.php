<?php

namespace Test\Query\Version;

use LevelFive\CompaniesHouse\Query\Company\GetVersion;
use Test\CommandOrQueryTest;

class GetVersionTest extends CommandOrQueryTest
{
    public function setUp() : void
    {
        $this->command = GetVersion::class;
    }

    public function getCommandInputs(): array
    {
        return [
            'no input throws error' => [
                false,
                [],
                [],
            ],
        ];
    }
}
