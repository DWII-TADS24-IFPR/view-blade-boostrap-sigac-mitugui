@extends('layouts.app')

@section('title', 'Declarações')

@section('content')
<h1>Declarações</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('declaracoes.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif

@if($declaracoes->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">HASH</th>
            <th scope="col">DATA</th>
            <th scope="col">ALUNO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($declaracoes as $declaracao)
            <tr>
                <td scope="col">{{ $declaracao->id }}</td>
                <td scope="col">{{ $declaracao->hash }}</td>
                <td scope="col">{{ $declaracao->data }}</td>
                <td scope="col">{{ $declaracao->aluno->nome }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection