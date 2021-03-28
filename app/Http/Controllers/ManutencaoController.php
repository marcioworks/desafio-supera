<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Manutencao;
use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManutencaoController extends Controller
{

    public function __construct(Manutencao $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $user = Auth::user();
        if($user == null){
            return redirect('/');
        }

        $dataLimite = Carbon::today();
        $dataLimite->addDays(7);
        $manutencoes = $this->model->with(['carro', 'carro.modelo'])->where('data_manutencao', '<=', $dataLimite)->get();
        // $manutencoes = Manutencao::all();
        return view('manutencao.index', compact('manutencoes'));
        // return response()->json($manutencoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agendar()
    {

        $user = Auth::user();
        if($user == null){
            return redirect('/');
        }

        $carros = new Carro();
        $user = Auth::user()->id;
        // dd($user);
        $carros = $carros->with('modelo')->where('user_id', '=', $user)->get();
        return view('manutencao.agendar', compact('carros'));
        //  return response()->json($carros);
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
            'carro_id' => 'required',
            'data_manutencao' => 'required',
        ];
        $feedback = [
            'required' => 'o campo :attribute é obrigatório',
        ];
        $request->validate($rules, $feedback);
        $carro = new Manutencao();
        $carro->user_id = $request->user_id;
        $carro->carro_id = $request->carro_id;
        $carro->data_manutencao = $request->data_manutencao;
        // dd($request->all());
        $carro->save();
        return redirect('/home')->with('success', 'Agendamento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manutencao  $manutencao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manutencao = $this->model->with(['carro', 'carro.modelo'])->where('id','=',$id)->get();
        // dd($manutencao);
        return view('manutencao.show', compact('manutencao'));
        // return response()->json($manutencao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manutencao  $manutencao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manutencao = $this->model->with(['carro', 'carro.modelo'])->where('id','=',$id)->get();
        // dd($manutencao);
        return view('manutencao.edit', compact('manutencao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manutencao  $manutencao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $rules = [
            'data_manutencao' => 'required',
        ];
        $feedback = [
            'required' => 'o campo :attribute é obrigatório',
        ];
        $request->validate($rules, $feedback);
        $manutencao = $this->model->find($id);
        $manutencao->fill($request->all());
        $manutencao->save();
        return redirect('/home')->with('success', 'Agendamento Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manutencao  $manutencao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manutencao = $this->model->find($id);
        $manutencao->delete();
        return redirect('/home')->with('success', 'Agendamento removido com sucesso!');

    }
}
