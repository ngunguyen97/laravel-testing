<?php

namespace Tests\Unit;

use App\DesignPatterns\Facades\Hash\Hash;
use PHPUnit\Framework\TestCase;
use Exception;

class HashTest extends TestCase
{
  public function testMd5Algorithm(): void
  {
    $hashValue = new Hash('test', 'md5');
    $this->assertSame('098f6bcd4621d373cade4e832627b4f6', $hashValue->make());
  }

  public function testSha1Algorithm(): void
  {
    $hashValue = new Hash('test', 'sha1');
    $this->assertSame('a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', $hashValue->make());
  }


  public function testNotMatchAlgorithm(): void
  {
    $hashValue = new Hash('test', 'bcrypt');

    $this->expectException(Exception::class);
    $this->expectExceptionCode(1);
    $hashValue->make();

  }
}
