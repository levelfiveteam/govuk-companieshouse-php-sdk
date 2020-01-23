<?php
namespace LevelFive\CompaniesHouse\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Entity;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Helper\ArrayResponse;

class Identification extends Entity implements EntityInterface
{
    /**
     * @var string
     */
    private $identificationType;

    /**
     * @var string
     */
    private $legalAuthority;

    /**
     * @var string
     */
    private $legalForm;

    /**
     * @var string
     */
    private $placeRegistered;

    /**
     * @var string
     */
    private $registrationNumber;

    public function __construct($response)
    {
        parent::__construct($response);

        $response = new ArrayResponse($response);
        $this->identificationType = $response->offsetGet('identification_type');
        $this->legalAuthority = $response->offsetGet('legal_authority');
        $this->legalForm = $response->offsetGet('legal_form');
        $this->placeRegistered = $response->offsetGet('place_registered');
        $this->registrationNumber = $response->offsetGet('registration_number');
    }

    /**
     * @return string
     */
    public function getIdentificationType(): ?string
    {
        return $this->identificationType;
    }

    /**
     * @return string
     */
    public function getLegalAuthority(): ?string
    {
        return $this->legalAuthority;
    }

    /**
     * @return string
     */
    public function getLegalForm(): ?string
    {
        return $this->legalForm;
    }

    /**
     * @return string
     */
    public function getPlaceRegistered(): ?string
    {
        return $this->placeRegistered;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(): ?string
    {
        return $this->registrationNumber;
    }
}
