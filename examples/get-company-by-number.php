<?php

require '../vendor/autoload.php';

use LevelFive\CompaniesHouse\CompaniesHouse;
use LevelFive\CompaniesHouse\Query\Company\GetCompanyByNumber;

$companiesHouse = new CompaniesHouse('api-key-here');

/** @var \LevelFive\CompaniesHouse\Entity\Company\GetCompany $response */
$response = $companiesHouse->handle(new GetCompanyByNumber(['company_number' => '0000000']));

echo 'Company name: ' . $response->getCompanyName();
echo PHP_EOL;
echo 'Status: ' . $response->getCompanyStatus();
echo PHP_EOL;
echo 'Accounts overdue: ' . $response->isAccountsOverdue();
echo PHP_EOL;
echo 'SIC Codes: ' . json_encode($response->getSicCodes());
