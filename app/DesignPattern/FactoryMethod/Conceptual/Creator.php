<?php

namespace App\DesignPattern\FactoryMethod\Conceptual;

use App\DesignPattern\FactoryMethod\Conceptual\Contracts\Product;

abstract class Creator
{
  abstract public function factoryMethod(): Product;

  public function someOperation(): string {
    // Call the factory method to create a Product object;
    $product = $this->factoryMethod();
    return "Creator: The same creator's code has just worked with " . $product->operation();
  }
}
