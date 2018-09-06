<?php
namespace PHPBestPractices1OOP\Domain\Restaurant;

class Restaurant
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
