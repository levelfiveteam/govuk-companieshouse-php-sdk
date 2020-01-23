<?php

require '../vendor/autoload.php';

use LevelFive\CompaniesHouse\CompaniesHouse;
use LevelFive\CompaniesHouse\Query\Company\GetCompanyOfficers;

$companiesHouse = new CompaniesHouse('api-key');

/** @var \LevelFive\CompaniesHouse\Entity\Company\CompanyOfficers $response */
$response = $companiesHouse->handle(new GetCompanyOfficers(['company_number' => '00000']));

echo 'Active: ' . $response->getActiveCount();
echo PHP_EOL;
echo 'Inactive: ' . $response->getInactiveCount();
echo PHP_EOL;
echo 'Resigned: ' . $response->getResignedCount();
echo PHP_EOL . PHP_EOL;
echo 'Officers';

$i = 1;
/** @var \LevelFive\CompaniesHouse\Entity\Common\Officer $officer */
foreach ($response->getOfficers() as $officer) {
    echo '====++ Officer ' . $i;
    $i++;
    echo PHP_EOL;
    echo $officer->getName()  . '(' . $officer->getOfficerRole() . ')' . PHP_EOL;
    echo $officer->getDateOfBirth()->getDateOfBirth() . PHP_EOL;
    echo 'Identification:' . PHP_EOL;
    echo $officer->getIdentitication()->getRegistrationNumber() . PHP_EOL;
    echo $officer->getIdentitication()->getIdentificationType();
    echo PHP_EOL;
    echo 'Address: ' .PHP_EOL;
    echo $officer->getAddress()->getFirstLine() . ', ' . $officer->getAddress()->getSecondLine();
}
