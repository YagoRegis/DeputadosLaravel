<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Deputado;

class DeputadosController extends Controller
{

	protected $deputados;

	public function __construct(Deputado $deputados)
	{
		$this->deputados = $deputados;
	}

    public function index($pagina)
    {
    	if(!isset($pagina)) {
    		$pagina = 1;
    	}

    	$deputados = $this->deputados->all($pagina);

    	return view('deputados.index', compact('deputados', 'pagina'));
    }
}
