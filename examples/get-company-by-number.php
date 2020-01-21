<?php

require '../vendor/autoload.php';

use LevelFive\CompaniesHouse\CompaniesHouse;
use LevelFive\CompaniesHouse\Query\Company\GetCompanyByNumber;

$companiesHouse = new CompaniesHouse(getenv('companieshouse_api'));

/** @var \LevelFive\CompaniesHouse\Entity\Company\GetCompany $response */
$response = $companiesHouse->handle(new GetCompanyByNumber(['company_number' => '07172265']));

var_dump($response->getCompanyName());
