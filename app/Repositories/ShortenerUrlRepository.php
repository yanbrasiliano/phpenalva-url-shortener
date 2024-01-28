<?php

namespace App\Repositories;

use App\Interfaces\ShortenerUrlRepositoryInterface;

class ShortenerUrlRepository implements ShortenerUrlRepositoryInterface
{
  private $pdo;

  public function __construct(\PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function create(array $data): array
  {

    $sql = "INSERT INTO links (short_url, url, created_at) VALUES (:short_url, :url, :created_at)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':short_url' => $data['short_url'], ':url' => $data['url'], ':created_at' => $data['created_at']]);

    return $data;
  }
}
