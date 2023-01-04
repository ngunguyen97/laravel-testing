<?php

namespace App\DesignPattern\AbstractFactory\Contracts;

interface TemplateRenderer
{
  public function render(string $templateString, array $arguments = []): string;
}
