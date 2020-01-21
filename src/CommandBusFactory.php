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
    private CommandBus $commandBus;

    public function __construct(CompaniesHouseConfig $companiesHouseConfig)
    {
        $this->registerCommandBus($companiesHouseConfig);
    }

    public function handle(CommandInterface $command)
    {
        return $this->commandBus->handle($command);
    }

    private function registerCommandBus(CompaniesHouseConfig $companiesHouseConfig)
    {
        $commands = $companiesHouseConfig->getBaseConfig()->get('commands');

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
