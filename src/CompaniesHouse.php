<?php
namespace LevelFive\CompaniesHouse;

class CompaniesHouse
{
    /**
     * @var CommandBusFactory
     */
    private $commandBus;

    /**
     * @var CompaniesHouseConfig
     */
    private $companiesHouseConfig;

    public function __construct($apiKey = "", array $config = [])
    {
        $this->companiesHouseConfig = new CompaniesHouseConfig($apiKey, $config);
        $this->commandBus = new CommandBusFactory($this->companiesHouseConfig);
    }

    /**
     * @param CommandInterface $command
     *
     * @return mixed
     */
    public function handle(CommandInterface $command)
    {
        return $this->commandBus->handle($command->setConfig($this->companiesHouseConfig));
    }
}
