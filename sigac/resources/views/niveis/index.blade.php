@extends('layouts.app')

@section('title', 'Níveis')

@section('content')
<h1>Niveis</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('niveis.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif


@if($niveis->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($niveis as $nivel)
            <tr>
                <td scope="col">{{ $nivel->id }}</td>
                <td scope="col">{{ $nivel->nome }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection