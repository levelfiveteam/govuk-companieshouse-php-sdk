<?php
namespace LevelFive\CompaniesHouse\Query\Version;

use LevelFive\CompaniesHouse\Command;
use LevelFive\CompaniesHouse\CommandInterface;

class GetVersion extends Command implements CommandInterface
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
