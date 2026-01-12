<?php

namespace Core\Criational\Builder\Conceitual;

use Core\Creational\Builder\Conceitual\Phone;
use Core\Creational\Builder\Conceitual\PhoneBuilderInterface;


/**
 * O Diretor é responsável apenas por executar as etapas de construção em uma
 * sequência específica. É útil ao produzir produtos de acordo com uma
 * ordem ou configuração específica. Estritamente falando, a classe Diretor é
 * opcional, já que o cliente pode controlar os construtores diretamente.
 */ 

class PhoneCreator
{
    public function __construct(
        protected PhoneBuilderInterface $phone
    ) {
    }

    /**
     * O Diretor pode construir diversas variações de produto usando as mesmas
     * etapas de construção.
     */
    public function createPhone(): Phone
    {
        // return $this->phone
        //     ->addModel()
        //     ->addCPU()
        //     ->addGPU()
        //     ->addRAM()
        //     ->getPhone();

        $this->phone->addModel();
        $this->phone->addCPU();
        $this->phone->addGPU();
        $this->phone->addRAM();
        return $this->phone->getPhone();
    }
}   
