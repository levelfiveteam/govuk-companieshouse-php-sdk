<?php
namespace LevelFive\CompaniesHouse\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Entity;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Helper\ArrayResponse;

class Officer extends Entity implements EntityInterface
{
    /**
     * @var Address
     */
    private $address;

    /**
     * @var DateOfBirth
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $appointedOn;

    /**
     * @var string
     */
    private $countryOfResidence;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nationality;

    /**
     * @var string
     */
    private $occupation;

    /**
     * @var string
     */
    private $officerRole;

    /**
     * @var string
     */
    private $resignedOn;

    /**
     * @var Identification
     */
    private $identification;

    /**
     * VersionNumber constructor.
     * @param mixed $response
     */
    public function __construct($response)
    {
        parent::__construct($response);

        $response = new ArrayResponse($response);
        $this->address = new Address($response->offsetGet('address'));
        $this->appointedOn = $response->offsetGet('appointed_on');
        $this->countryOfResidence = $response->offsetGet('country_of_residence');
        $this->dateOfBirth = new DateOfBirth($response->offsetGet('date_of_birth'));
        $this->name = $response->offsetGet('name');
        $this->nationality = $response->offsetGet('nationality');
        $this->occupation = $response->offsetGet('occupation');
        $this->officerRole = $response->offsetGet('officer_role');
        $this->resignedOn = $response->offsetGet('resigned_on');
        $this->identification = new Identification($response->offsetGet('identification'));
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return DateOfBirth
     */
    public function getDateOfBirth(): DateOfBirth
    {
        return $this->dateOfBirth;
    }

    /**
     * @return string
     */
    public function getAppointedOn(): ?string
    {
        return $this->appointedOn;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence(): ?string
    {
        return $this->countryOfResidence;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    /**
     * @return string
     */
    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    /**
     * @return string
     */
    public function getOfficerRole(): ?string
    {
        return $this->officerRole;
    }

    /**
     * @return string
     */
    public function getResignedOn(): ?string
    {
        return $this->resignedOn;
    }

    /**
     * @return Identification
     */
    public function getIdentitication() : Identification
    {
        return $this->identification;
    }
}
