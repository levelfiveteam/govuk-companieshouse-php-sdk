<?php

require '../vendor/autoload.php';

use LevelFive\CompaniesHouse\Entity\Company\RegisteredAddress;
use LevelFive\CompaniesHouse\CompaniesHouse;
use LevelFive\CompaniesHouse\Query\Company\GetRegisteredAddressByCompanyNumber;

$companiesHouse = new CompaniesHouse('api-key-here');

/** @var RegisteredAddress $response */
$response = $companiesHouse->handle(new GetRegisteredAddressByCompanyNumber(['company_number' => '000000000']));

echo 'Address Line 1: ' . $response->getFirstLine();
echo PHP_EOL;
echo 'Address Line 2: ' . $response->getSecondLine();
echo PHP_EOL;
echo 'Region: ' . $response->getRegion();
