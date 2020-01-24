<?php
namespace Test\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Common\Identification;
use PHPStan\Testing\TestCase;

class IdentificationTest extends TestCase
{
    public function testIdentification()
    {
        $response = [
            'identification_type' => 'passport',
            'legal_authority' => 'UK',
            'legal_form' => 'EN11',
            'place_registered' => 'London',
            'registration_number' => '123123123213',
        ];

        $identification = new Identification($response);

        self::assertEquals($response['identification_type'], $identification->getIdentificationType());
        self::assertEquals($response['legal_authority'], $identification->getLegalAuthority());
        self::assertEquals($response['legal_form'], $identification->getLegalForm());
        self::assertEquals($response['place_registered'], $identification->getPlaceRegistered());
        self::assertEquals($response['registration_number'], $identification->getRegistrationNumber());

    }
}
