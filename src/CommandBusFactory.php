<?php

namespace LevelFive\CompaniesHouse;

use League\Container\Container;
use League\Tactician\CommandBus;
use League\Container\ReflectionContainer;
use League\Tactician\Container\ContainerLocator;
use League\Tactician\Handler\CommandHandlerMiddleware;
use League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor;
use League\Tactician\Handler\MethodNameInflector\HandleClassNameInflector;

class CommandBusFactory
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * @var CompaniesHouseConfig
     */
    private $config;

    public function __construct(CompaniesHouseConfig $config)
    {
        $this->registerCommandBus($config);
    }

    public function handle(CommandInterface $command)
    {
        return $this->commandBus->handle($command);
    }

    private function registerCommandBus(CompaniesHouseConfig $config)
    {
        $commands = $config->getBaseConfig()->get('commands');

        $containerLocator = new ContainerLocator(
            (new Container())->delegate(new ReflectionContainer()),
            $commands->toArray()
        );

        $handlerMiddleware = new CommandHandlerMiddleware(
            new ClassNameExtractor(),
            $containerLocator,
            new HandleClassNameInflector()
        );

        $this->commandBus = new CommandBus([$handlerMiddleware]);
    }
}
