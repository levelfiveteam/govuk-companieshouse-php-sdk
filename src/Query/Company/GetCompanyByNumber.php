<?php
namespace LevelFive\CompaniesHouse\Query\Company;

use LevelFive\CompaniesHouse\Command;
use LevelFive\CompaniesHouse\CommandInterface;

class GetCompanyByNumber extends Command implements CommandInterface
{
    public function getInputFilterSpecification() : array
    {
        return [
            'company_number' => [
                'required' => true,
            ]
        ];
    }

    public function getBody()
    {
        return [
            'company_number' => $this->input->get('company_number')->getValue()
        ];
    }
}
