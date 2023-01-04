<?php

namespace App\Common;

class DateFormatter
{
  protected ?\DateTime $stamp;

  public function __construct(\DateTime $stamp) {
    $this->stamp = $stamp;
  }

  public function getStamp(): \DateTime {
    return $this->stamp;
  }
}
