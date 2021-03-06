<?php

namespace LevelFive\CompaniesHouse\Exception;

class EntityNotExistException extends \Exception
{
    public function __construct($entityName)
    {
        parent::__construct('Entity ' . $entityName . ' not found', 500);
    }
}
