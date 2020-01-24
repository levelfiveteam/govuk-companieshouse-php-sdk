<?php
namespace Test\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Common\Officer;
use PHPStan\Testing\TestCase;

class OfficerTest extends TestCase
{
    public function testIdentification()
    {
        $response = [
            'address' => [
                'address_line_1' => '10 Downing Street',
                'address_line_2' => 'London',
                'locality' => 'London.',
                'region' => 'Greater London',
                'postal_code' => 'SW1 3WQ',
                'country' => 'United Kingdom',
                'po_box' => 'POBOX 1003',
                'premises' => 'Building',
                'care_of' => 'test',
            ],
            'appointed_on' => '10/03/2010',
            'country_of_residence' => 'United Kingdom',
            'name' => 'John Doe',
            'nationality' => 'British',
            'occupation' => 'Director',
            'officer_role' => 'CEO',
            'resigned_on' => null,
            'identification' => [
                'identification_type' => 'passport',
                'legal_authority' => 'UK',
                'legal_form' => 'EN11',
                'place_registered' => 'London',
                'registration_number' => '123123123213',
            ],
            'date_of_birth' => [
                'day' => '21',
                'month' => '03',
                'year' => '1979',
            ],
        ];

        $officer = new Officer($response);

        $address = $officer->getAddress();
        self::assertEquals($response['address']['address_line_1'], $address->getFirstLine());
        self::assertEquals($response['address']['address_line_2'], $address->getSecondLine());
        self::assertEquals($response['address']['locality'], $address->getLocality());
        self::assertEquals($response['address']['region'], $address->getRegion());
        self::assertEquals($response['address']['postal_code'], $address->getPostalCode());
        self::assertEquals($response['address']['country'], $address->getCountry());
        self::assertEquals($response['address']['po_box'], $address->getPoBox());
        self::assertEquals($response['address']['premises'], $address->getPremises());
        self::assertEquals($response['address']['care_of'], $address->getCareOf());

        self::assertEquals($response['appointed_on'], $officer->getAppointedOn());
        self::assertEquals($response['country_of_residence'], $officer->getCountryOfResidence());
        self::assertEquals($response['name'], $officer->getName());
        self::assertEquals($response['nationality'], $officer->getNationality());
        self::assertEquals($response['occupation'], $officer->getOccupation());
        self::assertEquals($response['officer_role'], $officer->getOfficerRole());
        self::assertNull($officer->getResignedOn());

        $identification = $officer->getIdentitication();
        self::assertEquals($response['identification']['identification_type'], $identification->getIdentificationType());
        self::assertEquals($response['identification']['legal_authority'], $identification->getLegalAuthority());
        self::assertEquals($response['identification']['legal_form'], $identification->getLegalForm());
        self::assertEquals($response['identification']['place_registered'], $identification->getPlaceRegistered());
        self::assertEquals($response['identification']['registration_number'], $identification->getRegistrationNumber());

        $dateOfBirth = $officer->getDateOfBirth();
        self::assertEquals($response['date_of_birth']['day'], $dateOfBirth->getDay());
        self::assertEquals($response['date_of_birth']['month'], $dateOfBirth->getMonth());
        self::assertEquals($response['date_of_birth']['year'], $dateOfBirth->getYear());
        self::assertEquals('21/03/1979', $dateOfBirth->getDateOfBirth());
    }
}
