<?php

namespace App\Interfaces;

interface ShortenerUrlRepositoryInterface
{
  /**
   * Creates a new short URL entry.
   *
   * @param array $data Data for creating a new short URL.
   * @return array Newly created short URL data.
   */
  public function create(array $data): array;
}
