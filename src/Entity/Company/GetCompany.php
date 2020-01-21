<?php
namespace LevelFive\CompaniesHouse\Entity\Company;

use LevelFive\CompaniesHouse\Entity\Entity;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Helper\ArrayResponse;

class GetCompany extends Entity implements EntityInterface
{
    /**
     * @var string
     */
    private $jurisdiction;

    /**
     * @var string
     */
    private $isLiquidated;

    /**
     * @var string
     */
    private $entityType;

    /**
     * @var string
     */
    private $companyNumber;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var Address
     */
    private $registeredOfficeAddress;

    /**
     * VersionNumber constructor.
     * @param mixed $response
     */
    public function __construct($response)
    {
        parent::__construct($response);

        $response = new ArrayResponse($response);
        $this->jurisdiction = $response->offsetGet('jurisdiction');
        $this->isLiquidated = $response->offsetGet('has_been_liquidated');
        $this->entityType = $response->offsetGet('type');
        $this->companyNumber = $response->offsetGet('company_number');
        $this->companyName = $response->offsetGet('company_name');
        $this->registeredOfficeAddress = $response->offsetGet('registered_office_address');
    }

    /**
     * @return string
     */
    public function getJurisdiction(): string
    {
        return $this->jurisdiction;
    }

    /**
     * @return string
     */
    public function getIsLiquidated(): string
    {
        return $this->isLiquidated;
    }

    /**
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }

    /**
     * @return string
     */
    public function getCompanyNumber(): string
    {
        return $this->companyNumber;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @return Address
     */
    public function getRegisteredOfficeAddress(): Address
    {
        return $this->registeredOfficeAddress;
    }
}
