@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
<h1>Categorias</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('categorias.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif

@if($categorias->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td scope="col">{{ $categoria->id }}</td>
                <td scope="col">{{ $categoria->nome }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection