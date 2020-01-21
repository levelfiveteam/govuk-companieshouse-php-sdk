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
        Query\Company\GetCompanyByNumber::class => QueryHandler\Company\GetCompanyByNumberHandler::class,
        Query\Me\PHPVersion::class => QueryHandler\Me\PHPVersionHandler::class,
    ],
    'entity_map' => [
        Query\Company\GetCompanyByNumber::class => "LevelFive\\CompaniesHouse\\Entity\\Company\\GetCompany",
    ],
    'companieshouse_http_url' => [
        Query\Company\GetCompanyByNumber::class => '/company/{{company_number}}',
    ],
];
