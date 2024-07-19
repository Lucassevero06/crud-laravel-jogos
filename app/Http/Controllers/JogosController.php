<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use function redirect;
use function view;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        redirect('jogos.create');
    }
}
