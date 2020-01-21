<?php
namespace LevelFive\CompaniesHouse;

use Laminas\InputFilter\Factory;
use Laminas\InputFilter\InputFilterInterface;

abstract class Command
{
    /**
     * @var InputFilterInterface
     */
    protected $input;

    /**
     * @var CompaniesHouseConfig
     */
    public $config;

    /**
     * Person constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $factory = new Factory();
        $inputFilter = $factory->createInputFilter($this->getInputFilterSpecification());

        $this->input = $inputFilter->setData($data);

        if (!$this->input->isValid()) {
            throw new \DomainException(json_encode($inputFilter->getMessages()), 422);
        }
    }

    public function getInput() : InputFilterInterface
    {
        return $this->input;
    }

    public function setConfig(CompaniesHouseConfig $config) : self
    {
        $this->config = $config;
        return $this;
    }

    public function getConfig() : CompaniesHouseConfig
    {
        return $this->config;
    }
}
