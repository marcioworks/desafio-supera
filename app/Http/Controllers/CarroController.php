<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Modelo;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class CarroController extends Controller
{

    public function __construct(Carro $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = new  Modelo();
        $modelos = $modelos->with('marca')->get();
        return view('carro.create',compact('modelos'));
        // return response()->json($modelos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'user_id' => 'required',
            'modelo_id' => 'required',
            'placa' => 'required|min:7|max:7',
            'cor' => 'required',
            'km' => 'required',

        ];
        $feedback=[
            'required'=> 'o campo :attribute é obrigatório',
            'placa.min'=> ' a Placa deve conter 7 caracteres.',
            'placa.max'=> ' a Placa deve conter 7 caracteres.'
        ];
        $request->validate($rules,$feedback);
        $carro = new Carro();
        $carro->user_id = $request->user_id;
        $carro->modelo_id = $request->modelo_id;
        $carro->placa = $request->placa;
        $carro->cor = $request->cor;
        $carro->km = $request->km;
        // dd($request->all());
        $carro->save();
        return redirect('/home')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carro $carro)
    {
        //
    }
}
