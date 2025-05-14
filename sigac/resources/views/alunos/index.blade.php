@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<h1>Alunos</h1>

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