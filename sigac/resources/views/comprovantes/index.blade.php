@extends('layouts.app')

@section('title', 'Comprovantes')

@section('content')
<h1>Comprovantes</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('comprovantes.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif

@if($comprovantes->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ALUNO</th>
            <th scope="col">ATIVIDADE</th>
            <th scope="col">HORAS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comprovantes as $comprovante)
            <tr>
                <td scope="col">{{ $comprovante->id }}</td>
                <td scope="col">{{ $comprovante->aluno->nome }}</td>
                <td scope="col">{{ $comprovante->atividade }}</td>
                <td scope="col">{{ $comprovante->horas }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection