<?php

namespace LevelFive\CompaniesHouse\QueryHandler\Company;

use LevelFive\CompaniesHouse\CompaniesHouseClient;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Handler;
use LevelFive\CompaniesHouse\Query\Company\GetRegisteredAddressByCompanyNumber;

class GetRegisteredAddressByCompanyNumberHandler extends Handler
{
    /**
     * @param GetRegisteredAddressByCompanyNumber $command
     * @return EntityInterface|null
     */
    public function handleGetRegisteredAddressByCompanyNumber(GetRegisteredAddressByCompanyNumber $command)
    {
        $client = new CompaniesHouseClient($command->getConfig());
        $registeredAddress = $client->handleApiCall($command);
        return $registeredAddress;
    }
}
