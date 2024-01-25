<?php

namespace App\Services;

use Core\BaseDatabase;
use App\Repositories\ShortenerUrlRepository; // Add this line

class ShortenerUrlService
{
  private $repository;
  protected $pdo;

  public function __construct()
  {
    $this->pdo = new BaseDatabase();
    $this->repository = new ShortenerUrlRepository($this->pdo->getDatabase());
  }


  public function create(array $data): array
  {
    $data['short_url'] = $this->generateShortUrl();
    $data['url'] = $this->normalizeUrl($data['url']);

    return $this->repository->create($data);
  }

  private function generateShortUrl(): string
  {
    $shortUrl = substr(md5(uniqid(rand(), true)), 0, 6);

    return $shortUrl;
  }

  private function normalizeUrl(string $url): string
  {
    $url = trim($url);

    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
      $url = "http://" . $url;
    }

    return $url;
  }
}
