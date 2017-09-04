<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Gastos;

class GastosController extends Controller
{
	protected $gastos;

	public function __construct(Gastos $gastos)
	{
		$this->gastos = $gastos;
	}

    public function index($id, $pagina)
    {
    	$array = array('pagina' => $pagina);
    	$gastos = $this->gastos->all($id, $array);
        $gastos_final = array();

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

    	return view('gastos.index', compact('gastos_final', 'gastos', 'id', 'pagina'));
    }
}
