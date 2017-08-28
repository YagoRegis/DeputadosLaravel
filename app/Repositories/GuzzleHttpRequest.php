<?php


namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Middleware;

/**
* 
*/
class GuzzleHttpRequest
{
	
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	protected function get($url, $pagina)
	{
		$response = $this->client->request('GET', $url, [
			'query' => ['pagina' => $pagina]
		]);

		return json_decode($response->getBody()->getContents());
	}
}