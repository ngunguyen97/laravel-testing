<?php

namespace App\Http\Controllers;

use App\DesignPattern\AbstractFactory\Page;
use App\DesignPattern\AbstractFactory\PHPTemplateFactory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
      $page = new Page('Same page', 'This is the body.');

      echo nl2br("Testing actual rendering with the PHPTemplate factory:\n");

      echo $page->render(new PHPTemplateFactory());
    }
}
