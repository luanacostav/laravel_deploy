<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiService
{
  protected $client;

  public function __construct()
  {
    $this->client = new Client([
        'base_uri' => 'https://django-laravel-render.onrender.com',
        'headers' => [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ],
    ]);
  }

  public function get($endpoint)
  {
    $response = $this->client->get($endpoint);
    return json_decode($response->getBody(), true);
  }

  public function post($endpoint, $data)
  {
    $response = $this->client->post($endpoint, [
        'json' => $data,
    ]);
    return json_decode($response->getBody(), true);
  }
}
