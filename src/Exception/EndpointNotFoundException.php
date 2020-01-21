<?php

namespace LevelFive\CompaniesHouse\Exception;

use LevelFive\CompaniesHouse\CommandInterface;

class EndpointNotFoundException extends \Exception
{
    public function __construct(CommandInterface $command)
    {
        parent::__construct('Endpoint for ' . get_class($command) . ' not found', 500);
    }
}
