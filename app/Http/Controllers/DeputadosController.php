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

    public function index()
    {
    	$deputados = $this->deputados->all();

    	return view('deputados.index', compact('deputados'));
    }
}
