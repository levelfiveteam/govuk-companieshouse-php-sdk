<?php
namespace LevelFive\CompaniesHouse\Entity\Company;

use LevelFive\CompaniesHouse\Entity\Common\Officer;
use LevelFive\CompaniesHouse\Entity\Entity;
use LevelFive\CompaniesHouse\Entity\EntityInterface;
use LevelFive\CompaniesHouse\Helper\ArrayResponse;

class CompanyOfficers extends Entity implements EntityInterface
{
    /**
     * @var int
     */
    private $activeCount;

    /**
     * @var string
     */
    private $eTag;

    /**
     * @var int
     */
    private $inactiveCount;

    /**
     * @var int
     */
    private $resignedCount;

    /**
     * @var array
     */
    private $officers;

    public function __construct($response)
    {
        parent::__construct($response);

        $response = new ArrayResponse($response);
        $this->activeCount = $response->offsetGet('active_count');
        $this->eTag = $response->offsetGet('etag');
        $this->inactiveCount = $response->offsetGet('inactive_count');
        $this->resignedCount = $response->offsetGet('resigned_count');

        foreach ($response->offsetGet('items') as $officer) {
            $this->officers[] = new Officer($officer);
        }
    }

    /**
     * @return int
     */
    public function getActiveCount(): int
    {
        return $this->activeCount;
    }

    /**
     * @return string
     */
    public function getETag(): string
    {
        return $this->eTag;
    }

    /**
     * @return int
     */
    public function getInactiveCount(): int
    {
        return $this->inactiveCount;
    }

    /**
     * @return int
     */
    public function getResignedCount(): int
    {
        return $this->resignedCount;
    }

    /**
     * @return array
     */
    public function getOfficers(): array
    {
        return $this->officers;
    }
}
