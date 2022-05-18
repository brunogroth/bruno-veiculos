<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Http\Requests\StoreMarca;
use Illuminate\Support\Str;
class MarcaController extends Controller
{
    public function index(Request $request){

        $marcas = Marca::simplepaginate(5);

        $search = $request->query('search');
        if(!empty($search)){

            $marcas = Marca::where(
                'descricao', 'like', '%'. $search .'%' 
            )->simplepaginate(5);
        }
        return view('marca.index', compact('marcas', 'search')); 
    }

    public function create(){
        return view('marca.create');      
    }

    public function store(StoreMarca $request){

        $slug = Str::of($request->descricao)->slug('-');
        $request->merge([
            'slug' => $slug
        ]);
       
        Marca::insert($request->except('_token'));
        return redirect()->route('marca.index')->with('status', 'Marca criada com sucesso!');;
    }
}
