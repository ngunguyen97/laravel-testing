<?php

namespace App\DesignPattern\AbstractFactory\Contracts;

interface PageTemplate
{
  public function getTemplateString(): string;
}
