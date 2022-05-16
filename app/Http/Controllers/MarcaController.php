<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Http\Requests\StoreMarca;
use Illuminate\Support\Str;
class MarcaController extends Controller
{
    public function index(){
        return view('marca.index');
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
