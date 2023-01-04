<?php

namespace App\DesignPattern\FactoryMethod\RealWorld\ConcreteCreator;

use App\DesignPattern\FactoryMethod\RealWorld\ConcreteConnector\LinkedInConnector;
use App\DesignPattern\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;
use App\DesignPattern\FactoryMethod\RealWorld\SocialNetworkPoster;

class LinkedInPoster extends SocialNetworkPoster
{
    private string $email, $password;

    public function __construct(string $email, string $password)
    {
      $this->email = $email;
      $this->password = $password;
    }

  /**
     * @inheritDoc
     */
    public function getSocialNetwork(): SocialNetworkConnector
    {
       return new LinkedInConnector($this->email, $this->password);
    }
}
