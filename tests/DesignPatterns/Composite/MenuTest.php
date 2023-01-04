<?php

namespace Tests\DesignPatterns\Composite;

use App\DesignPatterns\Composite\Link;
use App\DesignPatterns\Composite\Menu;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
  public function testMenu(): void {
    $main_menu = new Menu('Main Menu');

    $laptop_menu  = new Menu('Laptop');
    $laptop_menu->add(new Link('L1', '/laptop/l1'));
    $laptop_menu->add(new Link('L2', '/laptop/l2'));

    $cellphone_menu = new Menu('Cellphone');
    $cellphone_menu->add(new Link('DumpPhone', '/cellphone/dump-phone'));

    $smartphone_menu = new Menu('Smartphone');
    $smartphone_menu->add(new Link('S1', '/smartphone/s1'));
    $smartphone_menu->add(new Link('S2', '/smartphone/s2'));

    $cellphone_menu->add($smartphone_menu);

    $main_menu->add($cellphone_menu);
    $main_menu->add($laptop_menu);

    printf($main_menu->render());

    $this->assertSame(true ,true);

  }
}
