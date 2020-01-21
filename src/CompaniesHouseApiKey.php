<?php

namespace LevelFive\CompaniesHouse;

use LevelFive\CompaniesHouse\Exception\NoApiKeyException;

class CompaniesHouseApiKey
{
    /**
     * @var string
     */
    private $apiKey;

    public function __construct(string $apiKey)
    {
        if (empty($apiKey)) {
            throw new NoApiKeyException();
        }

        $this->apiKey = $apiKey;
    }

    public function getApiKey() : string
    {
        return $this->apiKey;
    }
}
