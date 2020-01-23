<?php
use LevelFive\CompaniesHouse\Query;
use LevelFive\CompaniesHouse\QueryHandler;

/**
 * Configuration for Companies House API
 * All the URLs and Specified keys must be stored in environment variables
*/
return [
    'application_name' => 'Companies House PHP SDK',
    'configuration' => [
        'base_url' => 'https://api.companieshouse.gov.uk'
    ],
    'commands' => [
        Query\GetPHPVersion::class => QueryHandler\GetPHPVersionHandler::class,
        Query\Company\GetCompanyByNumber::class => QueryHandler\Company\GetCompanyByNumberHandler::class,
        Query\Company\GetRegisteredAddressByCompanyNumber::class => QueryHandler\Company\GetRegisteredAddressByCompanyNumberHandler::class,
        Query\Company\GetCompanyOfficers::class => QueryHandler\Company\GetCompanyOfficersHandler::class,
    ],
    'entity_map' => [
        Query\Company\GetCompanyByNumber::class => "LevelFive\\CompaniesHouse\\Entity\\Company\\GetCompany",
        Query\Company\GetRegisteredAddressByCompanyNumber::class => "LevelFive\\CompaniesHouse\\Entity\\Company\\RegisteredAddress",
        Query\Company\GetCompanyOfficers::class => "LevelFive\\CompaniesHouse\\Entity\\Company\\CompanyOfficers",
    ],
    'companieshouse_http_url' => [
        Query\Company\GetCompanyByNumber::class => '/company/{{company_number}}',
        Query\Company\GetRegisteredAddressByCompanyNumber::class => '/company/{{company_number}}/registered-office-address',
        Query\Company\GetCompanyOfficers::class => '/company/{{company_number}}/officers',
    ],
];
