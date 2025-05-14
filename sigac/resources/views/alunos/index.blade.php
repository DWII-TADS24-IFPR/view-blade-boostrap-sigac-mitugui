@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<h1>Alunos</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('alunos.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif

@if($alunos->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
            <tr>
                <td scope="col">{{ $aluno->id }}</td>
                <td scope="col">{{ $aluno->nome }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection