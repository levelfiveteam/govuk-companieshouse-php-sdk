<?php
namespace LevelFive\CompaniesHouse\Entity\Company;

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
    }


}
