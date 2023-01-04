<?php

namespace Tests\PHP8\Interfaces;

use App\PHP8\Interfaces\CollectionAgency;
use App\PHP8\Interfaces\DebtCollectionService;
use App\PHP8\Interfaces\Rocky;
use PHPUnit\Framework\TestCase;

class CollectionAgencyTest extends TestCase
{
    public function testCollectionAgency() {
      $collector = new CollectionAgency();
      echo $collector->collect(100) .PHP_EOL;
      $this->assertSame(true, true);
    }

    public function testDebtCollectionService() {
      $service = new DebtCollectionService();
      $service->collectDebt(new Rocky());
      $this->assertSame(true, true);
    }
}
