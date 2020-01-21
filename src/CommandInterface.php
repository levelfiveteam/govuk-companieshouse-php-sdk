<?php

namespace LevelFive\CompaniesHouse;

interface CommandInterface
{
    public function getInputFilterSpecification() : array;

    public function getBody();
}
