<?php

namespace App\DesignPattern\FactoryMethod\RealWorld\ConcreteConnector;

use App\DesignPattern\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    private string $login, $password;

    public function __construct(string $login, string $password)
    {
      $this->login = $login;
      $this->password = $password;
    }

  public function logIn(): void
    {
      echo nl2br("Send HTTP API request to log in user $this->login with " .
        "password $this->password\n");
    }

    public function logOut(): void
    {
      echo nl2br("Send HTTP API request to log out user $this->login\n");
    }

    public function createPost($content): void
    {
      echo nl2br("Send HTTP API requests to create a '$content' content in Facebook timeline.\n");
    }
}
