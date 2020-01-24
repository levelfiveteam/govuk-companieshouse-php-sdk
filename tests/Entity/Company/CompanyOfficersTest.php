<?php
namespace Test\Entity\Company;

use LevelFive\CompaniesHouse\Entity\Company\CompanyOfficers;
use LevelFive\CompaniesHouse\Entity\Company\RegisteredAddress;
use PHPStan\Testing\TestCase;

class CompanyOfficersTest extends TestCase
{
    public function testCompanyOfficers()
    {
        $response = [
            'active_count' => '3',
            'etag' => 'LON',
            'inactive_count' => '1',
            'resigned_count' => '2',
            'items' => $this->getOfficers(),
        ];

        $companyOfficers = new CompanyOfficers($response);

        self::assertEquals($response['active_count'], $companyOfficers->getActiveCount());
        self::assertEquals($response['etag'], $companyOfficers->getETag());
        self::assertEquals($response['inactive_count'], $companyOfficers->getInactiveCount());
        self::assertEquals($response['resigned_count'], $companyOfficers->getResignedCount());
        self::assertEquals(2, count($companyOfficers->getOfficers()));
    }

    private function getOfficers() : array
    {
        return [
            [
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
            ],
            [
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
            ],
        ];
    }
}
