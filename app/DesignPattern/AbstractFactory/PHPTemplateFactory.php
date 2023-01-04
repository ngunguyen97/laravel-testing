<?php

namespace App\DesignPattern\AbstractFactory;

use App\DesignPattern\AbstractFactory\Contracts\PageTemplate;
use App\DesignPattern\AbstractFactory\Contracts\TemplateRenderer;
use App\DesignPattern\AbstractFactory\Contracts\TitleTemplate;
use App\DesignPattern\AbstractFactory\Templates\PHPTemplatePageTemplate;
use App\DesignPattern\AbstractFactory\Templates\PHPTemplateRenderer;
use App\DesignPattern\AbstractFactory\Templates\PHPTemplateTitleTemplate;

class PHPTemplateFactory implements Contracts\TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
      return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
      return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
      return new PHPTemplateRenderer();
    }
}
