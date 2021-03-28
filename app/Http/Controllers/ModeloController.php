<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeloController extends Controller
{
    public function __construct(Modelo $model)
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

        $user = Auth::user();
        if($user == null){
            return redirect('/');
        }

        $marcas = Marca::all();
        // $modelos = $modelos->with('marca')->get();
        return view('modelo.create', compact('marcas'));
        //    return response()->json($marcas);
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
        $rules = [
            'marca_id' => 'required',
            'nome' => 'required',

        ];
        $feedback=[
            'required'=> 'o campo :attribute é obrigatório',
        ];
        $request->validate($rules,$feedback);
        $modelo = new Modelo();
        $modelo->marca_id = $request->marca_id;
        $modelo->nome = $request->nome;
        $modelo->numero_portas = $request->numero_portas;
        $modelo->lugares = $request->lugares;
        $modelo->air_bag = $request->air_bag;
        $modelo->abs = $request->abs;
        // dd($request->all());
        $modelo->save();
        return redirect('/home')->with('success',  'Modelo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $modelo)
    {
        //
    }
}
