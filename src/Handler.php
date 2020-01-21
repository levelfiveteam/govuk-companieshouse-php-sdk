<?php

namespace LevelFive\CompaniesHouse;

abstract class Handler
{
    /**
     * @var CompaniesHouseConfig
     */
    protected $companiesHouseConfig;

    public function setCompaniesHouseConfig(CompaniesHouseConfig $companiesHouseConfig)
    {
        $this->companiesHouseConfig = $companiesHouseConfig;
        return $this;
    }
}
