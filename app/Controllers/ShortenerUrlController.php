<?php

namespace App\Controllers;

use Core\BaseDatabase;
use Core\BaseController;
use App\Traits\RestResponseTrait;
use App\Services\ShortenerUrlService;
use App\Repositories\ShortenerUrlRepository;

class ShortenerUrlController extends BaseController
{
  use RestResponseTrait;

  private $shortenerUrlService;

  public function __construct()
  {
    $pdo = new BaseDatabase();
    $repository = new ShortenerUrlRepository($pdo->getDatabase());
    $this->shortenerUrlService = new ShortenerUrlService($repository);
  }

  public function index()
  {
    $this->renderView('/Shortener/layout');
  }
  public function create($request)
  {
    $url = $request->post->url;
    $shortUrl = $this->shortenerUrlService->shortenUrl($url);

    return $this->jsonResponse($shortUrl);
  }
}
