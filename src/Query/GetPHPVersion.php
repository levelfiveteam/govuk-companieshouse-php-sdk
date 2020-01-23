<?php
namespace LevelFive\CompaniesHouse\Query;

use LevelFive\CompaniesHouse\Command;
use LevelFive\CompaniesHouse\CommandInterface;

class GetPHPVersion extends Command implements CommandInterface
{
    public function getInputFilterSpecification() : array
    {
        return [];
    }

    public function getBody()
    {
        return [];
    }
}
