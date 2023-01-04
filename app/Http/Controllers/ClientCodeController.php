<?php

namespace App\Http\Controllers;

use App\DesignPattern\FactoryMethod\Conceptual\Creator;
use Illuminate\Http\Request;

class ClientCodeController extends Controller
{
    public function index(Creator $creator) {
      echo nl2br("Client: I'm not aware of the creator's class, but it still works.\n")
        . $creator->someOperation();
    }
}
