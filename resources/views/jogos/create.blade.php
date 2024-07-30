@extends('layouts.app')

@section('title', 'Criar Jogo')

@section('content')

    <div class="container mt-5">
        <h1>Crie um novo Jogo</h1>
        <a class="btn btn-primary" href="{{ route('jogos-index') }}">Voltar</a>
        <form action="{{ route('jogos-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="bg-secundary form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de Criação</label>
                    <input type="number" name="ano_criacao" id="ano_criacao" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" id="valor" class="form-control" step="0.01">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Enviar">
                </div>
            </div>
        </form>
    </div>

@endsection
