<?php

namespace App\DesignPattern\FactoryMethod\Conceptual\ConcreteProduct;

use App\DesignPattern\FactoryMethod\Conceptual\Contracts\Product;

class ConcreteProduct1 implements Product
{

    public function operation(): string
    {
      return nl2br("{Result of the ConcreteProduct1}.");
    }
}
