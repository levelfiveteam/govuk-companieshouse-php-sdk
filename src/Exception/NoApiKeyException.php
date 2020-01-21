<?php

namespace LevelFive\CompaniesHouse\Exception;

use Throwable;

class NoApiKeyException extends \HttpException
{
    public function __construct()
    {
        parent::__construct("No API Key provided.  Refer to companies house documentation.  [https://developer.companieshouse.gov.uk/api/docs/index/gettingStarted/apikey_authorisation.html]", 500);
    }
}
