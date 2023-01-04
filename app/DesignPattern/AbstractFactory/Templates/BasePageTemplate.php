<?php

namespace App\DesignPattern\AbstractFactory\Templates;

use App\DesignPattern\AbstractFactory\Contracts\PageTemplate;
use App\DesignPattern\AbstractFactory\Contracts\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate
{
  protected TitleTemplate $titleTemplate;

  public function __construct(TitleTemplate $titleTemplate)
  {
    $this->titleTemplate = $titleTemplate;
  }
}
