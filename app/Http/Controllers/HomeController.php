<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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


        $user = Auth::user();
        if($user == null){
            return redirect('/');
        }
        $manutencoes = new Manutencao();
        $dataLimite = Carbon::today();
        $dataLimite->addDays(7);
        $manutencoes = $manutencoes->with(['carro', 'carro.modelo'])->where('data_manutencao', '<=', $dataLimite)->get();
        return view('manutencao.index', compact('manutencoes'));
        // return view('home');
    }
}
