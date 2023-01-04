<?php

namespace App\DesignPattern\FactoryMethod\RealWorld;

use App\DesignPattern\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;

abstract class SocialNetworkPoster
{
  /**
   * The actual factory method. Note that it returns the abstract connector.
   * This lets subclasses return any concrete connectors without breaking the
   * superclass' contract.
   */
  abstract public function getSocialNetwork(): SocialNetworkConnector;

  public function post($content): void {
    // Call the factory method to create a social network object.
    $network = $this->getSocialNetwork();
    //... then use it as you will.
    $network->logIn();
    $network->createPost($content);
    $network->logOut();

  }
}
