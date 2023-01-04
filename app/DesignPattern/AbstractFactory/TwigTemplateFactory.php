<?php

namespace App\DesignPattern\AbstractFactory;

use App\DesignPattern\AbstractFactory\Contracts\PageTemplate;
use App\DesignPattern\AbstractFactory\Contracts\TemplateRenderer;
use App\DesignPattern\AbstractFactory\Contracts\TitleTemplate;

class TwigTemplateFactory implements Contracts\TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
      return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
      return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
      return new TwigRenderer();
    }
}
