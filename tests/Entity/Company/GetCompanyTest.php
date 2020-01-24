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
            'registered_office_is_in_dispute' => false,
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
            'accounts' => ['overdue' => false, 'next_due' => '10/10/2020', 'next_made_up_to' => '10/10/2021'],
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
        self::assertEquals($response['date_of_cessation'], $getCompany->getDateOfCessation());
        self::assertEquals($response['date_of_creation'], $getCompany->getDateOfCreation());
        self::assertEquals($response['etag'], $getCompany->getEtag());
        self::assertEquals($response['external_registration_number'], $getCompany->getExternalRegistrationNumber());

        self::assertEquals($response['has_been_liquidated'], $getCompany->getIsLiquidated());
        self::assertEquals($response['has_charges'], $getCompany->isHasCharges());
        self::assertEquals($response['has_insolvency_history'], $getCompany->isHasInsolvencyHistory());
        self::assertEquals($response['is_community_interest_company'], $getCompany->isCommunityInterestCompany());
        self::assertEquals($response['jurisdiction'], $getCompany->getJurisdiction());

        self::assertEquals($response['last_full_members_list_date'], $getCompany->getLastFullMembersListDate());

        self::assertEquals($response['partial_data_available'], $getCompany->getPartialDataAvailable());
        self::assertEquals($response['registered_office_is_in_dispute'], $getCompany->isRegisteredOfficeIsInDispute());

        self::assertEquals($response['type'], $getCompany->getEntityType());
        self::assertEquals($response['subtype'], $getCompany->getEntitySubtype());

        $address = $getCompany->getRegisteredOfficeAddress();
        self::assertEquals($response['registered_office_address']['address_line_1'], $address->getFirstLine());
        self::assertEquals($response['registered_office_address']['address_line_2'], $address->getSecondLine());
        self::assertEquals($response['registered_office_address']['locality'], $address->getLocality());
        self::assertEquals($response['registered_office_address']['region'], $address->getRegion());
        self::assertEquals($response['registered_office_address']['postal_code'], $address->getPostalCode());
        self::assertEquals($response['registered_office_address']['country'], $address->getCountry());
        self::assertEquals($response['registered_office_address']['po_box'], $address->getPoBox());
        self::assertEquals($response['registered_office_address']['premises'], $address->getPremises());
        self::assertEquals($response['registered_office_address']['care_of'], $address->getCareOf());

        self::assertEquals($response['sic_codes'], $getCompany->getSicCodes());

        self::assertEquals($response['type'], $getCompany->getEntityType());
        self::assertEquals($response['subtype'], $getCompany->getEntitySubtype());

        self::assertEquals($response['accounts'], $getCompany->getAccounts());
        self::assertEquals($response['accounts']['overdue'], $getCompany->isAccountsOverdue());
        self::assertEquals($response['accounts']['next_due'], $getCompany->getAccountsNextDue());
        self::assertEquals($response['accounts']['next_made_up_to'], $getCompany->getAccountsNextMadeUpTo());
    }
}
