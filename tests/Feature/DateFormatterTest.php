<?php

namespace Tests\Feature;

use App\Common\DateFormatter;
use PHPUnit\Framework\TestCase;

class DateFormatterTest extends TestCase
{
  public function testStampMustBeInstanceOfDateTime() {
    $date = new DateFormatter(new \DateTime());

    $this->assertInstanceOf('DateTime', $date->getStamp());
  }
}
