<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    protected $validationRules = [
        'nome' => 'required|min:3'
    ];

    protected $customMessages = [
        'nome.required' => 'O nome é obrigatório.',
        'nome.min' => 'O nome deve ter pelo menos 3 caracteres'
    ];

    public function index()
    {
        $niveis = Nivel::all();
        return view('niveis.index')->with(['niveis' => $niveis]);
    }
    
    public function create()
    {
        return view('niveis.create');
    }
    
    public function store(Request $request)
    {
        $request->validate($this->validationRules, $this->customMessages);

        Nivel::create($request->all());
        return redirect()->route('niveis.index')->with(['success'=>'Nivel '.$request->nome.' criado com sucesso!']);
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
