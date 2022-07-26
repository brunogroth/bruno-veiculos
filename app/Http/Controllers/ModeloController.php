<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModelo;
use App\Models\marca;
use Illuminate\Http\Request;
use App\Models\Modelo;
use Illuminate\Support\Str;

class ModeloController extends Controller
{
    public function index(Request $request){
        $modelos = Modelo::simplepaginate(5);
        //$marca = Marca::find('id', $request->marca_id)->first();
        //$marca = Marca::where('id',$request->marca_id)->get();
        //$marca = Marca::select('descricao')->where('id', $request->marca_id)->get();
        //$marca = Marca::where('id',5)->first();
        $search = $request->query('search');
        
        if(!empty($search)){
           
            $modelos = Modelo::where(
                'descricao', 'like', '%'. $search .'%' 
            )->simplepaginate(5);
        }
        $modelos->merge([
            'marca' => $marca
        ]);//ta dando pau aqui nao ta aparecendo o nome da marca la na view
        return view('modelos.index', compact('modelos', 'search')); 
    }

    public function create(){
        $marcas = Marca::all();
        
        return view('modelos.create', compact('marcas'));    
    }

    public function store(StoreModelo $request){
        
        $marca = Marca::find($request->id_marca);
        $slug = Str::of($request->descricao)->slug('-');
        $request->merge([
            'slug' => $slug
        ]);
        
        $modelo = Modelo::insert($request->except('_token'));

        return redirect()->route('modelo.index')->with('status', 'Modelo registrado com sucesso!');;
    }
}
