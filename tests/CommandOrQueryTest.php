<?php

namespace Test;

use DomainException;
use Laminas\InputFilter\InputFilterInterface;
use LevelFive\CompaniesHouse\Command;
use LevelFive\CompaniesHouse\CommandInterface;
use PHPUnit\Framework\TestCase;

abstract class CommandOrQueryTest extends TestCase implements CommandOrQueryTestInterface
{
    /**
     * @dataProvider getCommandInputs
     */
    public function testCommand(bool $errorExpected = false, array $input = [], $response = false)
    {
        if ($errorExpected) {
            self::expectException(DomainException::class);
            self::expectExceptionCode(422);
        }

        if (empty($this->command)) {
            throw new \InvalidArgumentException('Command does not exist');
        }

        /** @var CommandInterface $command */
        $command = new $this->command($input);
        self::assertInstanceOf(Command::class, $command);

        if ($response || is_array($response)) {
            self::assertEquals($command->getBody(), $response);
        }

        self::assertInstanceOf(InputFilterInterface::class, $command->getInput());
    }
}
