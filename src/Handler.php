<?php

namespace LevelFive\CompaniesHouse;

abstract class Handler
{
    protected CompaniesHouseConfig $companiesHouseConfig;

    public function setCompaniesHouseConfig(CompaniesHouseConfig $companiesHouseConfig)
    {
        $this->companiesHouseConfig = $companiesHouseConfig;
        return $this;
    }
}
