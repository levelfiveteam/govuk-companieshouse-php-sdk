<?php
namespace Test\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Common\DateOfBirth;
use PHPStan\Testing\TestCase;

class DateOfBirthTest extends TestCase
{
    public function testDateOfBirth()
    {
        $response = [
            'day' => '21',
            'month' => '03',
            'year' => '1979',
        ];

        $dateOfBirth = new DateOfBirth($response);

        self::assertEquals($response['day'], $dateOfBirth->getDay());
        self::assertEquals($response['month'], $dateOfBirth->getMonth());
        self::assertEquals($response['year'], $dateOfBirth->getYear());
        self::assertEquals('21/03/1979', $dateOfBirth->getDateOfBirth());
    }
}
