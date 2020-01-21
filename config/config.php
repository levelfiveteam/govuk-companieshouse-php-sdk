<?php
use LevelFive\CompaniesHouse\Query;
use LevelFive\CompaniesHouse\QueryHandler;

/**
 * Configuration for Companies House API
 * All the URLs and Specified keys must be stored in environment variables
*/
return [
    'companieshouse_configuration' => [
        'base_url' => 'https://api.companieshouse.gov.uk/'
    ],
    'commands' => [
        Query\Version\GetVersion::class => QueryHandler\Version\GetVersionHandler::class,
    ],
    'entity_map' => [
        Query\Version\GetVersion::class => "Railsbank\\Entity\\Version\\VersionNumber",
    ],
    'companieshouse_http_url' => [
        Query\Version\GetVersion::class => '/v1/customer/version',
    ],
];
