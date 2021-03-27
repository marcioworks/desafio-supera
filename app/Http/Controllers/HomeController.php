<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $manutencoes = DB::table('manutencoes')
            ->join('users', 'users.id', '=', 'manutencoes.user_id')
            ->join('carros', 'carros.id', '=', 'manutencoes.carro_id')
            ->join('modelos', 'carros.modelo_id', '=', 'modelos.id')
            ->get();
        // $manutencoes = Manutencao::all();
        dd($manutencoes);
        return view('manutencao.index', compact('manutencoes'));
        // return view('home');
    }
}
