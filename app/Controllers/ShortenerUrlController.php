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
    $contentType = $_SERVER["CONTENT_TYPE"] ?? '';
    if (stripos($contentType, 'application/json') !== false) {
      $data = json_decode(file_get_contents('php://input'), true);
    } else {
      $data = $_POST;
    }

    try {
      $shortenedData = $this->shortenerUrlService->create($data);
      return $this->successResponse($shortenedData);
    } catch (\Exception $e) {
      return $this->errorResponse($e->getMessage(), 500);
    }
  }
}
