<?php

namespace LevelFive\CompaniesHouse;

use Laminas\Config\Config;
use Laminas\Config\Factory;
use LevelFive\CompaniesHouse\Exception\CompaniesHouseConfigurationMissingException;

class ConfigServiceFactory
{
    /**
     * @var array
     */
    private $config = [];

    /**
     * ConfigServiceFactory constructor.
     *
     * @param bool $config
     */
    public function __construct($config = false)
    {
        if (! empty($config)) {
            $configuration = [
                'configuration' => $config,
            ];

            $this->config = $configuration;
        }
    }

    public function getConfigService() :? Config
    {
        $config = Factory::fromFile(__DIR__ . '/../config/config.php');

        if (! empty($this->config)) {
            $config = array_merge($config, $this->config);
        }

        $config = new Config($config);
        $this->validateConfig($config);

        return $config;
    }

    private function validateConfig(Config $config) : bool
    {
        try {
            $companiesHouseConfig = $this->getConfiguration($config);
            if (! $companiesHouseConfig->get('base_url')) {
                return false;
            }

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    private function getConfiguration(Config $config) :? Config
    {
        if (! $config->offsetExists('configuration')) {
            throw new CompaniesHouseConfigurationMissingException();
        }

        return $config->offsetGet('configuration');
    }
}
