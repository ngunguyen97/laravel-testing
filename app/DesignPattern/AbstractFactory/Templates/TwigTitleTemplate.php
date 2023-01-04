<?php

namespace App\DesignPattern\AbstractFactory\Templates;

class TwigTitleTemplate implements \App\DesignPattern\AbstractFactory\Contracts\TitleTemplate
{

    public function getTemplateString(): string
    {
      return "<h1>{{ title }}</h1>";
    }
}
