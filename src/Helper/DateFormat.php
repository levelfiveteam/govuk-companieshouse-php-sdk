<?php
namespace LevelFive\CompaniesHouse\Helper;

/**
 * Centralise date formatting for Companies House API
 *
 * Class DateFormat
 */
class DateFormat
{
    public function getCurrentDate() : string
    {
        $date = new \DateTime('now');
        return $date->format('Y-m-d');
    }
}
