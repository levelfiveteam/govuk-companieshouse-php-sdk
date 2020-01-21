<?php

namespace Test\Query\Company;

use LevelFive\CompaniesHouse\Query\Company\GetCompanyByNumber;
use Test\CommandOrQueryTest;

class GetVersionTest extends CommandOrQueryTest
{
    public function setUp() : void
    {
        $this->command = GetCompanyByNumber::class;
    }

    public function getCommandInputs(): array
    {
        return [
            'no input throws error' => [
                true,
                [],
                [],
            ],
            'company number added' => [
                false,
                ['company_number' => '12341234'],
                ['company_number' => '12341234'],
            ]
        ];
    }
}
