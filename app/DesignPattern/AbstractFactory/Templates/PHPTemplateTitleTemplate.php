<?php

namespace App\DesignPattern\AbstractFactory\Templates;

use App\DesignPattern\AbstractFactory\Contracts\TitleTemplate;

class PHPTemplateTitleTemplate implements TitleTemplate
{

    public function getTemplateString(): string
    {
      return "<h1><?= \$title; ?></h1>";
    }
}
