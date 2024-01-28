<?php

namespace App\Services;

use App\Repositories\ShortenerUrlRepository;

class ShortenerUrlService
{
  private $repository;

  public function __construct(ShortenerUrlRepository $repository)
  {
    $this->repository = $repository;
  }

  public function shortenUrl($url)
  {
    $shortUrlData = ShortenerUrlService::send(['url' => $url]);


    if (isset($shortUrlData['success']) && $shortUrlData['success']) {
      $data = [
        'short_url' => $shortUrlData['data']['url'],
        'url' => $shortUrlData['data']['full'],
        'created_at' => date('Y-m-d H:i:s')
      ];
      $this->repository->create($data);

      return $shortUrlData;
    }

    return 'Error: Unable to shorten URL';
  }



  private static function send($data = [])
  {
    $endpoint = 'https://ulvis.net/API/write/get?' . http_build_query($data);

    $ch = curl_init();
    curl_setopt_array($ch, [
      CURLOPT_URL => $endpoint,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
      ],
    ]);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
      echo "Erro do cURL: " . curl_error($ch);
    }
    curl_close($ch);

    $responseData = json_decode($response, true);

    if (!empty($responseData['success']) && !empty($responseData['data']['url'])) {
      return $responseData;
    } else {
      return 'Error: Unable to shorten URL';
    }
  }
}
