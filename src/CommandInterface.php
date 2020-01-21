<?php

namespace LevelFive\CompaniesHouse;

interface CommandInterface
{
    public function getInputFilterSpecification() : array;

    public function getBody();

    public function setConfig(CompaniesHouseConfig $config);

    public function getConfig() : CompaniesHouseConfig;
}
