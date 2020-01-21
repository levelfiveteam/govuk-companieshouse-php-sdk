<?php
namespace LevelFive\CompaniesHouse;

use LevelFive\CompaniesHouse\CommandBusFactory;
use LevelFive\CompaniesHouse\Exception\NoApiKeyException;
use LevelFive\CompaniesHouse\CommandInterface;
use LevelFive\CompaniesHouse\CompaniesHouseConfig;

class CompaniesHouse
{
    private CompaniesHouseConfig $companiesHouseConfig;

    private CommandBusFactory $commandBus;

    public function __construct(string $apiKey)
    {
        $this->companiesHouseConfig = new CompaniesHouseConfig($apiKey);
        $this->commandBus = new CommandBusFactory($this->companiesHouseConfig);
    }

    /**
     * @param CommandInterface $command
     *
     * @return mixed
     */
    public function handle(CommandInterface $command)
    {
        return $this->commandBus->handle($command);
    }
}
