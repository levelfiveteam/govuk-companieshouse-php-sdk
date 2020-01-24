<?php
namespace LevelFive\CompaniesHouse\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Entity;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Helper\ArrayResponse;

class DateOfBirth extends Entity implements EntityInterface
{
    /**
     * @var int
     */
    private $day;

    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $year;

    public function __construct($response)
    {
        parent::__construct($response);

        $response = new ArrayResponse($response);
        $this->day = $response->offsetGet('day');
        $this->month = $response->offsetGet('month');
        $this->year = $response->offsetGet('year');
    }

    /**
     * @return int
     */
    public function getDay():? int
    {
        return $this->day;
    }

    /**
     * @return int
     */
    public function getMonth():? int
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function getYear():? int
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function getDateOfBirth():? string
    {
        return $this->day . '/' . $this->month . '/' . $this->year;
    }
}
