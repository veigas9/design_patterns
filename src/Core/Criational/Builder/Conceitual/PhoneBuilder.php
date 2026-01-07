<?php

namespace Core\Creational\Builder\Conceitual;

class PhoneBuilder implements PhoneBuilderInterface
{
   public function __construct(
    protected Phone $phone,
    protected array $data,
   )  {

   }

    public function reset(): void
    {
       
    }

    public function addCPU(): PhoneBuilderInterface
    {
        $this->phone->cpu = $this->data['cpu'];
        return $this;
    }

    public function addGPU(): PhoneBuilderInterface
    {
        $this->phone->gpu = $this->data['gpu'];
        return $this;
    }

    public function addRAM(): PhoneBuilderInterface
    {
        $this->phone->ram = $this->data['ram'];
        return $this;
    }

    public function addModel(): PhoneBuilderInterface
    {
        $this->phone->model = $this->data['model'];
        return $this;
    }

    public function getPhone(): Phone
    {
        return $this->phone;
    }
}