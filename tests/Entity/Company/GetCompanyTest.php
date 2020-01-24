<?php
namespace Test\Entity\Company;

use LevelFive\CompaniesHouse\Entity\Company\GetCompany;
use PHPStan\Testing\TestCase;

class GetCompanyTest extends TestCase
{
    public function testGetCompany()
    {
        $response = [
            'can_file' => true,
            'company_name' => 'Level 5',
            'company_number' => '1029282.',
            'company_status' => 'active',
            'company_status_detail' => 'Really active',
            'date_of_cessation' => '10/03/1970',
            'date_of_creation' => '10/02/2010',
            'etag' => 'LON',
            'external_registration_number' => '1234TEST',
            'has_been_liquidated' => true,
            'has_charges' => false,
            'has_insolvency_history' => false,
            'is_community_interest_company' => true,
            'jurisdiction' => '123',
            'last_full_members_list_date' => '10/02/2020',
            'partial_data_available' => 'Tomorrow',
            'registered_office_is_in_dispute' => 'No',
            'type' =>  'Company',
            'subtype' => 'Ltd',
            'registered_office_address' => [
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
            'sic_codes' => ['10292', '190282',],
            'accounts' => true,
            'overdue' => true,
            'next_due' => 'tomorrow',
            'next_made_up_to' => 'today',
        ];

        $getCompany = new GetCompany($response);

        self::assertEquals($response['can_file'], $getCompany->isCanFile());
        self::assertEquals($response['company_name'], $getCompany->getCompanyName());
        self::assertEquals($response['company_number'], $getCompany->getCompanyNumber());
        self::assertEquals($response['company_status'], $getCompany->getCompanyStatus());
        self::assertEquals($response['company_status_detail'], $getCompany->getCompanyStatusDetail());

    }
}
