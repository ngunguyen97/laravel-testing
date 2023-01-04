<?php

namespace Tests\Feature;

use Tests\TestCase;

class FamilyRequiresParentTest extends TestCase
{
    /**
     *
     */
    public function testFamilyRequiresParent() {
      $names = ['Taylor', 'Dayle', 'Matthew', 'Shawn', 'Neil'];

      $this->expectException(\InvalidArgumentException::class);
      $result = $this->array_until('Bob', $names);


    }

    public function array_until($stopPoint, $arr): array
    {
      $index = array_search($stopPoint, $arr);

      if (false === $index) {
        throw new \InvalidArgumentException('Key does not exist in array');
      }

      return array_slice($arr, 0, $index);
    }
}
