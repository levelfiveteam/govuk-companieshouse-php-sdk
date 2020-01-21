<?php

namespace LevelFive\CompaniesHouse;

use Laminas\Config\Config;

class CompaniesHouseConfig
{
    /**
     * @var Config
     */
    private $configService;

    /**
     * @var Config
     */
    private $companiesHouseConfig;

    /**
     * @var CompaniesHouseApiKey
     */
    private $apiKey;

    public function __construct(string $apiKey, array $config = [])
    {
        $this->apiKey = new CompaniesHouseApiKey($apiKey);

        $configServiceFactory = new ConfigServiceFactory($config);
        $this->configService = $configServiceFactory->getConfigService();

        /** @var Config $companiesHouseConfig */
        $companiesHouseConfig = $this->configService->get('configuration');

        /** @var Config $companiesHouseConfig */
        $this->companiesHouseConfig = $companiesHouseConfig;
    }

    public function getBaseConfig() : Config
    {
        return $this->configService;
    }

    public function getBaseApiUrl() : string
    {
        return $this->companiesHouseConfig->get('base_url');
    }

    public function getApiKey() : string
    {
        return $this->apiKey->getApiKey();
    }
}
