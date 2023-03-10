<?php

namespace App\DesignPattern\FactoryMethod\Conceptual\Contracts;

/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface Product
{
  public function operation(): string;
}
