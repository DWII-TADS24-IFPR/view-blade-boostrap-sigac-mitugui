@extends('layouts.app')

@section('title', 'Documentos')

@section('content')
<h1>Documentos</h1>

@if($documentos->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">URL</th>
            <th scope="col">DESCRICAO</th>
            <th scope="col">STATUS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($documentos as $documento)
            <tr>
                <td scope="col">{{ $documento->id }}</td>
                <td scope="col">{{ $documento->url }}</td>
                <td scope="col">{{ $documento->descricao }}</td>
                <td scope="col">{{ $documento->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection