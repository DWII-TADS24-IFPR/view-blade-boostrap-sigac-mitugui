@extends('layouts.app')

@section('title', 'Documentos')

@section('content')
<h1>Documentos</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('documentos.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif

@if($documentos->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">URL</th>
            <th scope="col">DESCRICAO</th>
            <th scope="col">STATUS</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($documentos as $documento)
            <tr>
                <td scope="col">{{ $documento->id }}</td>
                <td scope="col">{{ $documento->url }}</td>
                <td scope="col">{{ $documento->descricao }}</td>
                <td scope="col">{{ $documento->status }}</td>
                <td>
                    <form
                        action="{{ route('documentos.destroy', $documento->id) }}"
                        method="POST"
                        onsubmit="return confirm('Tem certeza que deseja excluir este documento?');"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection