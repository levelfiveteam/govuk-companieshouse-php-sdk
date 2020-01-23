<?php
use LevelFive\CompaniesHouse\Query;
use LevelFive\CompaniesHouse\QueryHandler;

/**
 * Configuration for Companies House API
 * All the URLs and Specified keys must be stored in environment variables
*/
return [
    'configuration' => [
        'base_url' => 'https://api.companieshouse.gov.uk'
    ],
    'commands' => [
        Query\GetPHPVersion::class => QueryHandler\GetPHPVersionHandler::class,
        Query\Company\GetCompanyByNumber::class => QueryHandler\Company\GetCompanyByNumberHandler::class,
        Query\Company\GetRegisteredAddressByCompanyNumber::class => QueryHandler\Company\GetRegisteredAddressByCompanyNumberHandler::class,
    ],
    'entity_map' => [
        Query\Company\GetCompanyByNumber::class => "LevelFive\\CompaniesHouse\\Entity\\Company\\GetCompany",
        Query\Company\GetRegisteredAddressByCompanyNumber::class => "LevelFive\\CompaniesHouse\\Entity\\Company\\RegisteredAddress",
    ],
    'companieshouse_http_url' => [
        Query\Company\GetCompanyByNumber::class => '/company/{{company_number}}',
        Query\Company\GetRegisteredAddressByCompanyNumber::class => '/company/{{company_number}}/registered-office-address',
    ],
];
