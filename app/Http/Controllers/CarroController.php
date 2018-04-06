<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;

class CarroController extends Controller
{
    public function index(){
    	$carros = Carro::all();
    	return response()->json($carros,201);
    }

    public function show(Carro $carro){
    	return response()->json($carro,201);
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'marca' => 'required|string',
    		'modelo' => 'required|string',
    		'año' => 'required|numeric',
    		'cilindrada' => 'required|numeric',
    		'tipo_combustible' => 'required|string'
    	]);
    	$carro = Carro::create($request->all());
    	return response()->json($carro,201);
    }

    public function update(Request $request, Carro $carro){
    	$this->validate($request,[
    		'marca' => 'required|string',
    		'modelo' => 'required|string',
    		'año' => 'required|numeric',
    		'cilindrada' => 'required|numeric',
    		'tipo_combustible' => 'required|string'
    	]);
    	$carro->update($request->all());
    	return response()->json($carro,200);
    }

    public function destroy(Carro $carro){
    	$carro->delete();
    	return response()->json(null,204);
    }
}
