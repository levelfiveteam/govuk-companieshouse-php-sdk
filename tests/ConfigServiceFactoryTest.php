<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Laminas\Config\Config;
use Laminas\Config\Factory;

class ConfigServiceFactoryTest extends TestCase
{
    public function testConfig()
    {
        $config = Factory::fromFile(__DIR__ . '/../config/config.php');
        $configService = new Config($config);
        self::assertEquals('Companies House PHP SDK', $configService->get('application_name'));
    }
}
