<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class Deputado extends GuzzleHttpRequest
{		
	public function all($pagina)
	{
		return $this->get('deputados/', $pagina);
	}

	public function find($id)
	{
		$array = array();
		return $this->get('deputados/'.$id, $array);
	}
}