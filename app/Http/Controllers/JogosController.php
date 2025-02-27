<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use function dd;
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
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        Jogo::create($request->all());
        return redirect()->route('jogos-index')->with('success', "Jogo criado com sucesso!");
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        if(!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request)
    {
        $jogos = Jogo::where('id', $request->id)->first();
        if(!empty($jogos)) {
            $jogos->update($request->all());
            return redirect()->route('jogos-index');
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function destroy(Request $request)
    {
        $jogos = Jogo::where('id', $request->id)->first();
        if(!empty($jogos)) {
            $jogos->delete();
            return redirect()->route('jogos-index');
        } else {
            return redirect()->route('jogos-index');
        }
    }
}
