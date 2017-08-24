<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class Deputado extends GuzzleHttpRequest
{		
	public function all()
	{
		return $this->get('deputados');
	}
}