<?php
namespace LevelFive\CompaniesHouse\Query\Me;

use LevelFive\CompaniesHouse\Command;
use LevelFive\CompaniesHouse\CommandInterface;
use LevelFive\CompaniesHouse\Query\QueryInterface;

class PHPVersion extends Command implements CommandInterface, QueryInterface
{
    public function getInputFilterSpecification() : array
    {
        return [];
    }

    public function getBody() :? array
    {
        return [];
    }
}
