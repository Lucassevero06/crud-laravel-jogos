@extends('layouts.app')

@section('title', 'Editar Jogo')

@section('content')

    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <a class="btn btn-primary" href="{{ route('jogos-index') }}">Voltar</a>
        <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input value="{{ $jogos->nome }}" type="text" name="nome" id="nome" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input value="{{ $jogos->categoria }}" type="text" name="categoria" id="categoria" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de Criação</label>
                    <input value="{{ $jogos->ano_criacao }}" type="number" name="ano_criacao" id="ano_criacao" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input value="{{ $jogos->valor }}" type="number" name="valor" id="valor" class="form-control" step="0.01">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>

@endsection
