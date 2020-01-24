<?php
namespace Test\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Common\Address;
use PHPStan\Testing\TestCase;

class AddressTest extends TestCase
{
    public function testAddress()
    {
        $response = [
            'address_line_1' => '10 Downing Street',
            'address_line_2' => 'London',
            'locality' => 'London.',
            'region' => 'Greater London',
            'postal_code' => 'SW1 3WQ',
            'country' => 'United Kingdom',
            'po_box' => 'POBOX 1003',
            'premises' => 'Building',
            'care_of' => 'test',
        ];

        $address = new Address($response);

        self::assertEquals($response['address_line_1'], $address->getFirstLine());
        self::assertEquals($response['address_line_2'], $address->getSecondLine());
        self::assertEquals($response['locality'], $address->getLocality());
        self::assertEquals($response['region'], $address->getRegion());
        self::assertEquals($response['postal_code'], $address->getPostalCode());
        self::assertEquals($response['country'], $address->getCountry());
        self::assertEquals($response['po_box'], $address->getPoBox());
        self::assertEquals($response['premises'], $address->getPremises());
        self::assertEquals($response['care_of'], $address->getCareOf());

        self::assertEquals($response, $address->getRawResponse());
    }
}
