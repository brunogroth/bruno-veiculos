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

        return redirect()->route('veiculo.index');
    }

    public function index(Request $request){

        $veiculos = Veiculo::simplepaginate(5);
        

        $search = $request->query('search');
        if(!empty($search)){

            $veiculos = Veiculo::where(
                'marca', 'like', '%'. $search .'%' 
            )->orWhere('placa', 'like', '%'. $search .'%'
            )->orWhere('modelo', 'like', '%'. $search .'%'
            )->simplepaginate(5);
        }
        return view('veiculo.index', compact('veiculos', 'search')); 
    }

    public function edit(Request $request, $id){
       
        $veiculo = Veiculo::find($id);

        return view('veiculo.edit', compact('veiculo'));

    }
    public function update(Request $request, $id){


        $veiculo = Veiculo::find($id);
        $valor_venda = str_replace('.', '', $request->valor_venda);
        $valor_venda = str_replace(',','.', $valor_venda);
        $request->merge([
            'placa' => str_replace( '-', '', $request->placa),
            'valor_venda' => $valor_venda
        ]);

        $veiculo->update([
            'placa'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'valor_venda'=>$request->valor_venda
            ]);
        
        return redirect()->route('veiculo.index');
    }
    

    public function destroy(Request $request, $id){
       
        $veiculo = Veiculo::destroy($id);

        return redirect()->route('veiculo.index');

    }
}