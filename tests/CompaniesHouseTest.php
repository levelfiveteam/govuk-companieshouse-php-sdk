<?php

namespace Test;

use LevelFive\CompaniesHouse\CompaniesHouse;
use LevelFive\CompaniesHouse\Exception\InvalidConfigException;
use LevelFive\CompaniesHouse\Exception\CompaniesHouseConfigurationMissingException;
use LevelFive\CompaniesHouse\Query\Version\GetVersion;
use LevelFive\CompaniesHouse\QueryHandler\Version\GetVersionHandler;
use PHPUnit\Framework\TestCase;

class CompaniesHouseTest extends TestCase
{
    public function testEmptyConfigThrowsError()
    {
        self::expectException(InvalidConfigException::class);
        self::expectExceptionMessage('Configuration not valid, refer to documentation.');
        new CompaniesHouse();
    }

    public function testInvalidConfigurationThrowsError()
    {
        self::expectException(InvalidConfigException::class);
        self::expectExceptionMessage('Configuration not valid, refer to documentation.');
        new CompaniesHouse(__DIR__ . '/configtest/emptyconfig.php', 'testtttt');
    }

    public function testValidConfiguration()
    {
        $railsbank = new CompaniesHouse('test123');
        $command = $railsbank->handle(new PHPVersion());

        self::assertNotNull($command);
        self::assertIsString($command);
    }
}
