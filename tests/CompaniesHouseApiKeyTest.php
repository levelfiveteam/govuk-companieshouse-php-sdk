<?php

namespace Test;

use LevelFive\CompaniesHouse\CompaniesHouseApiKey;
use PHPUnit\Framework\TestCase;

class CompaniesHouseApiKeyTest extends TestCase
{
    public function testCompaniesHouseApiKey()
    {
        $apiKey = rand(10000,20000);

        $companiesHouseApiKey = new CompaniesHouseApiKey($apiKey);

        self::assertEquals($apiKey, $companiesHouseApiKey->getApiKey());
    }
}
