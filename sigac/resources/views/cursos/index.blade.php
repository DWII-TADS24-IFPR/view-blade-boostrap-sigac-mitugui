@extends('layouts.app')

@section('title', 'Níveis')

@section('content')
<h1>Cursos</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('cursos.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif

@if($cursos->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">TOTAL DE HORAS</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td scope="col">{{ $curso->id }}</td>
                <td scope="col">{{ $curso->nome }}</td>
                <td scope="col">{{ $curso->total_horas }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection