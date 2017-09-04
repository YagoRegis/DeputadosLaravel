<?php

namespace App\Http\Controllers;

use \DateTime;
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
    	$deputados = $this->deputados->all($array = array('pagina' => $pagina));

    	return view('deputados.index', compact('deputados', 'pagina'));
    }

    public function show($id)
    {
        $deputado = $this->deputados->find($id);
        $aniversario = new DateTime($deputado->dados->dataNascimento);
        $today = new DateTime('today');

        $deputado = [
            'id' => $deputado->dados->id,
            'nome' => $deputado->dados->nomeCivil,
            'dataNascimento' => date('d/m/Y', strtotime($deputado->dados->dataNascimento)),
            'idade' => $aniversario->diff($today)->y,
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
