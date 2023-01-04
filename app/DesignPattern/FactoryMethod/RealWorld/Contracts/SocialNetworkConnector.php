<?php

namespace App\DesignPattern\FactoryMethod\RealWorld\Contracts;

interface SocialNetworkConnector
{
  public function logIn(): void;
  public function logOut(): void;
  public function createPost($content): void;
}
