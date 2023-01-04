<?php

namespace App\DesignPattern\FactoryMethod\RealWorld\ConcreteCreator;

use App\DesignPattern\FactoryMethod\RealWorld\ConcreteConnector\FacebookConnector;
use App\DesignPattern\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;
use App\DesignPattern\FactoryMethod\RealWorld\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private string $login, $password;

    public function __construct(string $login, string $password)
    {

      $this->login = $login;
      $this->password = $password;
    }

  /**
     * @inheritDoc
     */
    public function getSocialNetwork(): SocialNetworkConnector
    {
       return new FacebookConnector($this->login, $this->password);
    }
}
