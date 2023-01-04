<?php

namespace App\oop;
class Animal
{
  public string $name;
  public string $sex;
  public int $age;
  public int $weight;
  public string $color;
  public string $texture;

  public function breathe() {}

  public function eat($food) {}

  public function run($destination) {}

  public function  sleep($hours) {}
}
