<?php

namespace Core\Creational\Builder\Conceitual;

interface PhoneBuilderInterface
{
    public function reset(): void;
    public function addCPU(): PhoneBuilderInterface;
    public function addGPU(): PhoneBuilderInterface;
    public function addRAM(): PhoneBuilderInterface;
    public function addModel(): PhoneBuilderInterface;
    public function getPhone(): Phone;
}