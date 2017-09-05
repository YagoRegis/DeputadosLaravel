<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Gastos;
use App\Repositories\Deputado;

class GastosController extends Controller
{
	protected $gastos;
    protected $deputado;

	public function __construct(Gastos $gastos, Deputado $deputado)
	{
		$this->gastos = $gastos;
        $this->deputado = $deputado;
	}

    public function index($id, $pagina)
    {
    	$array = array('pagina' => $pagina, 'ano' => date("Y"));
        
    	$gastos = $this->gastos->all($id, $array);
        $deputado = $this->deputado->find($id);

        $gastos_final = array();
        $links = $gastos->links;
        foreach ($gastos->dados as $gasto)
        {
            $temp =
            [
                'tipoDespesa' => $gasto->tipoDespesa,
                'nomeFornecedor' => $gasto->nomeFornecedor,
                'dataDocumento' => date('d/m/Y', strtotime($gasto->dataDocumento)),
                'valorDocumento' => number_format($gasto->valorDocumento, 2, ',', ' ')
            ];
            array_push($gastos_final, $temp);
        }

    	return view('gastos.index', compact('gastos_final', 'links', 'deputado', 'pagina'));
    }
}
