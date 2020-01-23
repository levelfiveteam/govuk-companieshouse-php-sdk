<?php

namespace Test;

use LevelFive\CompaniesHouse\CompaniesHouse;
use LevelFive\CompaniesHouse\Exception\NoApiKeyException;
use LevelFive\CompaniesHouse\Query\GetPHPVersion;
use PHPUnit\Framework\TestCase;

class CompaniesHouseTest extends TestCase
{
    public function testNoApiKeyThrowsError()
    {
        self::expectException(NoApiKeyException::class);
        new CompaniesHouse();
    }

    public function testValidConfiguration()
    {
        $railsbank = new CompaniesHouse('test123');
        $command = $railsbank->handle(new GetPHPVersion());

        self::assertNotNull($command);
        self::assertIsString($command);
    }
}
