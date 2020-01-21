<?php

namespace LevelFive\CompaniesHouse\QueryHandler\Version;

use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Handler;
use LevelFive\CompaniesHouse\CompaniesHouseClient;
use LevelFive\CompaniesHouse\Query\Version\GetVersion;

class GetVersionHandler extends Handler
{
    /**
     * @param GetVersion $command
     * @return EntityInterface|null
     */
    public function handleGetVersion(GetVersion $command)
    {
        $client = new CompaniesHouseClient($command->getCompaniesHouseConfig());
        $version = $client->handleApiCall($command);
        return $version;
    }
}
