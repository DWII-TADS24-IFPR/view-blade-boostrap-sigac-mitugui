<?php

namespace App\Http\Controllers;

use App\Models\Declaracao;
use Illuminate\Http\Request;

class DeclaracaoController extends Controller
{
    public function index()
    {
        return view('declaracoes.index')->with(['declaracoes' => Declaracao::all()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
