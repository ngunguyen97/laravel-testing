<?php

namespace App\DesignPattern\FactoryMethod\Conceptual\ConcreteCreator;

use App\DesignPattern\FactoryMethod\Conceptual\ConcreteProduct\ConcreteProduct1;
use App\DesignPattern\FactoryMethod\Conceptual\Contracts\Product;
use App\DesignPattern\FactoryMethod\Conceptual\Creator;

class ConcreteCreator1 extends Creator
{

    public function factoryMethod(): Product
    {
       return new ConcreteProduct1();
    }
}
