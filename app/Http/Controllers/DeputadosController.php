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

    public function show($id) 
    {
        $deputado = $this->deputados->find($id);

        $deputado = [
            'nome' => $deputado->dados->nomeCivil,
            'dataNascimento' => date('d/m/Y', strtotime($deputado->dados->dataNascimento)),
            'siglaUf' => $deputado->dados->ultimoStatus->siglaUf,
            'siglaPartido' => $deputado->dados->ultimoStatus->siglaPartido,
            'urlFoto' => $deputado->dados->ultimoStatus->urlFoto,
            'telefone' => $deputado->dados->ultimoStatus->gabinete->telefone,
            'email' => $deputado->dados->ultimoStatus->gabinete->email,
            'situacao' => $deputado->dados->ultimoStatus->situacao,
            'condicaoEleitoral' => $deputado->dados->ultimoStatus->condicaoEleitoral
        ];



        return view('deputados.show', compact('deputado', 'id'));
    }
}
