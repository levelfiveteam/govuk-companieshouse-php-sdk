<?php
namespace LevelFive\CompaniesHouse\Entity\Company;

use LevelFive\CompaniesHouse\Entity\Entity;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Helper\ArrayResponse;
use LevelFive\CompaniesHouse\Entity\Common\Address;

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
    private $entitySubtype;

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
     * @var array
     */
    private $accounts;

    /**
     * @var boolean
     */
    private $isAccountsOverdue = false;

    /**
     * @var \DateTimeImmutable
     */
    private $accountsNextDue;

    /**
     * @var \DateTimeImmutable
     */
    private $accountsNextMadeUpTo;

    /**
     * @var bool
     */
    private $canFile = false;

    /**
     * @var string
     */
    private $companyStatus;

    /**
     * @var string
     */
    private $companyStatusDetail;

    /**
     * @var string
     */
    private $dateOfCessation;

    /**
     * @var string
     */
    private $dateOfCreation;

    /**
     * @var string
     */
    private $etag;

    /**
     * @var string
     */
    private $externalRegistrationNumber;

    /**
     * @var bool
     */
    private $hasCharges = false;

    /**
     * @var bool
     */
    private $hasInsolvencyHistory = false;

    /**
     * @var bool
     */
    private $isCommunityInterestCompany = false;

    /**
     * @var array
     */
    private $sicCodes;

    /**
     * @var string
     */
    private $lastFullMembersListDate;

    /**
     * @var string
     */
    private $partialDataAvailable;

    /**
     * @var bool
     */
    private $registeredOfficeIsInDispute;

    /**
     * VersionNumber constructor.
     * @param mixed $response
     */
    public function __construct($response)
    {
        parent::__construct($response);

        $response = new ArrayResponse($response);
        $this->canFile = $response->offsetGet('can_file');
        $this->companyName = $response->offsetGet('company_name');
        $this->companyNumber = $response->offsetGet('company_number');
        $this->companyStatus = $response->offsetGet('company_status');
        $this->companyStatusDetail = $response->offsetGet('company_status_detail');
        $this->dateOfCessation = $response->offsetGet('date_of_cessation');
        $this->dateOfCreation = $response->offsetGet('date_of_creation');
        $this->etag = $response->offsetGet('etag');
        $this->externalRegistrationNumber = $response->offsetGet('external_registration_number');

        $this->isLiquidated = $response->offsetGet('has_been_liquidated');
        $this->hasCharges = $response->offsetGet('has_charges');
        $this->hasInsolvencyHistory = $response->offsetGet('has_insolvency_history');
        $this->isCommunityInterestCompany = $response->offsetGet('is_community_interest_company');
        $this->jurisdiction = $response->offsetGet('jurisdiction');

        $this->lastFullMembersListDate = $response->offsetGet('last_full_members_list_date');

        $this->partialDataAvailable = $response->offsetGet('partial_data_available');
        $this->registeredOfficeIsInDispute = $response->offsetGet('registered_office_is_in_dispute');

        $this->entityType = $response->offsetGet('type');
        $this->entitySubtype = $response->offsetGet('subtype');

        $this->registeredOfficeAddress = new Address($response->offsetGet('registered_office_address'));

        $this->sicCodes = $response->offsetGet('sic_codes');

        $accounts = new ArrayResponse($response->offsetGet('accounts'));

        $this->accounts = $accounts->getArray();
        $this->isAccountsOverdue = $accounts->offsetGet('overdue');
        $this->accountsNextDue = $accounts->offsetGet('next_due');
        $this->accountsNextMadeUpTo = $accounts->offsetGet('next_made_up_to');
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

    /**
     * @return string
     */
    public function getEntitySubtype(): string
    {
        return $this->entitySubtype;
    }

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @return bool
     */
    public function isAccountsOverdue(): bool
    {
        return $this->isAccountsOverdue;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getAccountsNextDue(): \DateTimeImmutable
    {
        return $this->accountsNextDue;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getAccountsNextMadeUpTo(): \DateTimeImmutable
    {
        return $this->accountsNextMadeUpTo;
    }

    /**
     * @return bool
     */
    public function isCanFile(): bool
    {
        return $this->canFile;
    }

    /**
     * @return string
     */
    public function getCompanyStatus(): string
    {
        return $this->companyStatus;
    }

    /**
     * @return string
     */
    public function getCompanyStatusDetail(): string
    {
        return $this->companyStatusDetail;
    }

    /**
     * @return string
     */
    public function getDateOfCessation(): string
    {
        return $this->dateOfCessation;
    }

    /**
     * @return string
     */
    public function getDateOfCreation(): string
    {
        return $this->dateOfCreation;
    }

    /**
     * @return string
     */
    public function getEtag(): string
    {
        return $this->etag;
    }

    /**
     * @return string
     */
    public function getExternalRegistrationNumber(): string
    {
        return $this->externalRegistrationNumber;
    }

    /**
     * @return bool
     */
    public function isHasCharges(): bool
    {
        return $this->hasCharges;
    }

    /**
     * @return bool
     */
    public function isHasInsolvencyHistory(): bool
    {
        return $this->hasInsolvencyHistory;
    }

    /**
     * @return bool
     */
    public function isCommunityInterestCompany(): bool
    {
        return $this->isCommunityInterestCompany;
    }

    /**
     * @return array
     */
    public function getSicCodes(): array
    {
        return $this->sicCodes;
    }

    /**
     * @return string
     */
    public function getLastFullMembersListDate(): string
    {
        return $this->lastFullMembersListDate;
    }

    /**
     * @return string
     */
    public function getPartialDataAvailable(): string
    {
        return $this->partialDataAvailable;
    }

    /**
     * @return bool
     */
    public function isRegisteredOfficeIsInDispute(): bool
    {
        return $this->registeredOfficeIsInDispute;
    }
}
