<?php
namespace LevelFive\CompaniesHouse\Entity\Common;

use LevelFive\CompaniesHouse\Entity\Entity;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Helper\ArrayResponse;

class Address extends Entity implements EntityInterface
{
    /**
     * @var string
     */
    private $firstLine;

    /**
     * @var string
     */
    private $secondLine;

    /**
     * @var string
     */
    private $locality;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $poBox;

    /**
     * @var string
     */
    private $premises;

    /**
     * @var string
     */
    private $careOf;

    /**
     * VersionNumber constructor.
     * @param mixed $response
     */
    public function __construct($response)
    {
        parent::__construct($response);

        $response = new ArrayResponse($response);
        $this->firstLine = $response->offsetGet('address_line_1');
        $this->secondLine = $response->offsetGet('address_line_2');
        $this->locality = $response->offsetGet('locality');
        $this->region = $response->offsetGet('region');
        $this->postalCode = $response->offsetGet('postal_code');
        $this->country = $response->offsetGet('country');
        $this->poBox = $response->offsetGet('po_box');
        $this->premises = $response->offsetGet('premises');
        $this->careOf = $response->offsetGet('care_of');
    }

    /**
     * @return string
     */
    public function getFirstLine(): string
    {
        return $this->firstLine;
    }

    /**
     * @return string
     */
    public function getSecondLine(): string
    {
        return $this->secondLine;
    }

    /**
     * @return string
     */
    public function getLocality(): string
    {
        return $this->locality;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPoBox(): string
    {
        return $this->poBox;
    }

    /**
     * @return string
     */
    public function getPremises(): string
    {
        return $this->premises;
    }

    /**
     * @return string
     */
    public function getCareOf(): string
    {
        return $this->careOf;
    }
}
