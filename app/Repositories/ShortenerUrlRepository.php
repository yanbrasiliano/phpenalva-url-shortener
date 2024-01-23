<?php

class ShortenerUrlRepository
{
  private $pdo;

  public function __construct(\PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function create(array $data): array
  {
    $sql = "INSERT INTO links (url, short_url) VALUES (:url, :short_url)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($data);

    return $data;
  }

  public function findByShortUrl(string $shortUrl): array
  {
    $sql = "SELECT * FROM links WHERE short_url = :short_url";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(['short_url' => $shortUrl]);

    return $stmt->fetch();
  }
}
