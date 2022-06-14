<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModelo;
use App\Models\marca;
use Illuminate\Http\Request;
use App\Models\Modelo;
use Illuminate\Support\Str;

class ModeloController extends Controller
{
    public function index(){
        return view('modelos.index');
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
