<?php

namespace LevelFive\CompaniesHouse\QueryHandler;

use LevelFive\CompaniesHouse\Handler;
use LevelFive\CompaniesHouse\Query\GetPHPVersion;

class GetPHPVersionHandler extends Handler
{
    /**
     * @param GetPHPVersion $command
     * @return string
     */
    public function handleGetPHPVersion(GetPHPVersion $command)
    {
        return \phpversion('tidy');
    }
}
