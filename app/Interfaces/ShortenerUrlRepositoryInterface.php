<?php

interface ShortenerUrlRepositoryInterface
{
  /**
   * Creates a new short URL entry.
   *
   * @param array $data Data for creating a new short URL.
   * @return array Newly created short URL data.
   */
  public function create(array $data): array;

  /**
   * Retrieves a short URL entry by its short code.
   *
   * @param string $shortUrl The short URL code.
   * @return array|null Short URL data or null if not found.
   */
  public function findByShortCode(string $shortCode): ?array;

  /**
   * Retrieves a short URL entry by the original URL.
   *
   * @param string $url The original URL.
   * @return array|null Short URL data or null if not found.
   */
  public function findByOriginalUrl(string $url): ?array;

  /**
   * Retrieves all short URL entries for a given user.
   *
   * @param int $userId User's identifier.
   * @return array List of short URLs for the user.
   */
  public function findAllByUserId(int $userId): array;

  /**
   * Retrieves a user's short URL entry by short code.
   *
   * @param int $userId User's identifier.
   * @param string $shortCode The short URL code.
   * @return array|null Short URL data or null if not found.
   */
  public function findByUserIdAndShortCode(int $userId, string $shortCode): ?array;

  /**
   * Retrieves a user's short URL entry by the original URL.
   *
   * @param int $userId User's identifier.
   * @param string $url The original URL.
   * @return array|null Short URL data or null if not found.
   */
  public function findByUserIdAndOriginalUrl(int $userId, string $url): ?array;

  /**
   * Deletes a short URL entry.
   *
   * @param int $id Short URL entry's identifier.
   * @return bool True if deletion was successful.
   */
  public function delete(int $id): bool;

  /**
   * Updates a short URL entry.
   *
   * @param int $id Short URL entry's identifier.
   * @param array $data Data to update the short URL entry.
   * @return bool True if update was successful.
   */
  public function update(int $id, array $data): bool;
}
