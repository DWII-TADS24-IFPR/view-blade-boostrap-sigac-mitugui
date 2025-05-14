<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Categoria;
use App\Models\Comprovante;
use Illuminate\Http\Request;

class ComprovanteController extends Controller
{
    protected $validationRules = [
        'horas' => 'required|numeric|min:1',
        'atividade' => 'required|string|max:255',
        'aluno_id' => 'required|exists:alunos,id',
        'categoria_id' => 'required|exists:categorias,id'
    ];

    protected $customMessages = [
        'horas.required' => 'O campo horas é obrigatório.',
        'horas.numeric' => 'O campo horas deve ser um número.',
        'horas.min' => 'O valor mínimo para horas é 1.',
    
        'atividade.required' => 'O campo atividade é obrigatório.',
        'atividade.string' => 'A atividade deve ser um texto.',
        'atividade.max' => 'A atividade deve ter no máximo 255 caracteres.',
    
        'aluno_id.required' => 'O campo aluno é obrigatório.',
        'aluno_id.exists' => 'O aluno selecionado não é válido.',
    
        'categoria_id.required' => 'O campo categoria é obrigatório.',
        'categoria_id.exists' => 'A categoria selecionada não é válida.'
    ];

    public function index()
    {
        return view('comprovantes.index')->with(['comprovantes' => Comprovante::all()]);
    }

    public function create()
    {
        return view('comprovantes.create')->with(['categorias' => Categoria::all(), 'alunos' => Aluno::all()]);
    }

    public function store(Request $request)
    {
        $request->validate($this->validationRules, $this->customMessages);

        Comprovante::create([
            'horas' => $request->horas,
            'atividade' => $request->atividade,
            'aluno_id' => $request->aluno_id,
            'categoria_id' => $request->categoria_id
        ]);

        return redirect()->route('comprovantes.index')->with(['success'=>'Comprovante para "'.$request->atividade.'" criado com sucesso!']);
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
