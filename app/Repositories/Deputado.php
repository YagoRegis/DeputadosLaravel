<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class Deputado extends GuzzleHttpRequest
{		
	public function all($pagina)
	{
		return $this->get('deputados/', $pagina);
	}
}