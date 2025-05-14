@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
<h1>Turmas</h1>

<button class="btn btn-primary" onclick="window.location.href='{{route('turmas.create')}}'">Adicionar</button>

@if(session('success'))
    <div id="alert-pop-up" class="alert alert-success my-3">
        {{ session('success') }}
    </div>
@endif

@if($turmas->isNotEmpty())
<table class="table table-white">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ANO</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($turmas as $turma)
            <tr>
                <td scope="col">{{ $turma->id }}</td>
                <td scope="col">{{ $turma->ano }}</td>
                <td>
                    <form
                        action="{{ route('turmas.destroy', $turma->id) }}"
                        method="POST"
                        onsubmit="return confirm('Tem certeza que deseja excluir esta turma?');"
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