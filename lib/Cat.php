<?php
namespace lib;

/**
 *
 */
class Cat extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function meow()
    {
        return "Cat {$this->name} is saying meow";
    }
}
