<?php

namespace App\DesignPattern\AbstractFactory\Contracts;

interface TemplateFactory
{

  public function createTitleTemplate(): TitleTemplate;

  public function createPageTemplate(): PageTemplate;

  public function getRenderer(): TemplateRenderer;
}
