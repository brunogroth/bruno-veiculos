<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function create() {
        return view('veiculo.create');
    } 


    public function store(Request $request){

        $valor_venda = str_replace('.', '', $request->valor_venda);
        $valor_venda = str_replace(',','.', $valor_venda);
        $request->merge([
            'placa' => str_replace( '-', '', $request->placa),
            'valor_venda' => $valor_venda
        ]);
        
        $veiculo = Veiculo::insert($request->except('_token'));
    }
}
