<?php

namespace App\DesignPattern\AbstractFactory;

class TwigRenderer implements Contracts\TemplateRenderer
{

    public function render(string $templateString, array $arguments = []): string
    {
      return \Twig::render($templateString, $arguments);
    }
}
