<?php

namespace LevelFive\CompaniesHouse\Exception;

class CompaniesHouseConfigurationMissingException extends \Exception
{
    public function __construct($key = "")
    {
        $message = 'Companies house configuration missing, refer to documentation.';

        if ($key !== '') {
            $message .= '  Key and/or value missing=' . $key . ' or all mode configuration are missing';
        }

        parent::__construct($message, 500);
    }
}
