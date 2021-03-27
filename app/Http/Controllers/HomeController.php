<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use Illuminate\Http\Request;

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
        $manutencoes = Manutencao::all();
        return view('manutencao.index', compact('manutencoes'));
        // return view('home');
    }
}
