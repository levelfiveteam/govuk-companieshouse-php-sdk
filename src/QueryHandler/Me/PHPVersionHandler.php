<?php

namespace LevelFive\CompaniesHouse\QueryHandler\Me;

use LevelFive\CompaniesHouse\Handler;
use LevelFive\CompaniesHouse\Query\Me\PHPVersion;

/**
 * Class PHPVersionHandler
 * @package LevelFive\CompaniesHouse\QueryHandler\Me
 */
class PHPVersionHandler extends Handler
{
    /**
     * @param PHPVersion $command
     * @return string|null
     */
    public function handlePHPVersion(PHPVersion $command)
    {
        return \phpversion('tidy');
    }
}
