<?php

namespace Core\Creational\Builder\Conceitual;

abstract class Phone
{
    public function __construct(
        protected ?string $cpu = null,
        protected ?string $gpu = null,
        protected ?int $ram = null,
        protected ?string $model = null,
    )   {
        //$this->validate();
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }
    public function __get($name)
    {
        return $this->{$name};
    }

}