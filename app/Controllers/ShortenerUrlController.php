<?php

namespace App\Controllers;

use App\Traits\RestResponseTrait;
use Core\BaseController;

class ShortenerUrlController extends BaseController
{
  use RestResponseTrait;

  public function index()
  {
    $this->renderView('/Shortener/layout');
  }
}
