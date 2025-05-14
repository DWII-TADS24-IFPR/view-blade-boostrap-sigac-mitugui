@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
<h1>Turmas</h1>

@if($turmas->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ANO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
            <tr>
                <td scope="col">{{ $turma->id }}</td>
                <td scope="col">{{ $turma->ano }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection