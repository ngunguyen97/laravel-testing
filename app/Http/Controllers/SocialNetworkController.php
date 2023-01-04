<?php

namespace App\Http\Controllers;

use App\DesignPattern\FactoryMethod\RealWorld\SocialNetworkPoster;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    public function initialize(SocialNetworkPoster $creator) {
      $creator->post('Hello World');
      $creator->post('I had a large hamburger this morning!');
    }
}
