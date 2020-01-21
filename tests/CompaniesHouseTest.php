<?php

namespace Test;

use LevelFive\CompaniesHouse\CompaniesHouse;
use LevelFive\CompaniesHouse\Exception\NoApiKeyException;
use PHPUnit\Framework\TestCase;
use LevelFive\CompaniesHouse\Query\Me\PHPVersion;

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
        $command = $railsbank->handle(new PHPVersion());

        self::assertNotNull($command);
        self::assertIsString($command);
    }
}
