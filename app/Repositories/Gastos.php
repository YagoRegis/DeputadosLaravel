<?php 

namespace App\Repositories;

use GuzzleHttp\Client;

class Gastos extends GuzzleHttpRequest
{
	public function all($id, $array)
	{
		return $this->get('deputados/'.$id.'/despesas/', $array);
	}
}