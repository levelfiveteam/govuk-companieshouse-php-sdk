<?php

namespace LevelFive\CompaniesHouse\QueryHandler\Company;

use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Handler;
use LevelFive\CompaniesHouse\CompaniesHouseClient;
use LevelFive\CompaniesHouse\Query\Company\GetCompanyByNumber;

class GetCompanyByNumberHandler extends Handler
{
    /**
     * @param GetCompanyByNumber $command
     * @return EntityInterface|null
     */
    public function handleGetCompanyByNumber(GetCompanyByNumber $command)
    {
        $client = new CompaniesHouseClient($command->getConfig());
        $version = $client->handleApiCall($command);
        return $version;
    }
}
