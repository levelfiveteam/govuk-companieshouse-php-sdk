<?php

namespace LevelFive\CompaniesHouse\QueryHandler\Company;

use LevelFive\CompaniesHouse\CompaniesHouseClient;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Handler;
use LevelFive\CompaniesHouse\Query\Company\GetCompanyOfficers;

class GetCompanyOfficersHandler extends Handler
{
    /**
     * @param GetCompanyOfficers $command
     * @return EntityInterface|null
     */
    public function handleGetCompanyOfficers(GetCompanyOfficers $command)
    {
        $client = new CompaniesHouseClient($command->getConfig());
        return $client->handleApiCall($command);
    }
}
