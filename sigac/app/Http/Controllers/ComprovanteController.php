<?php

namespace App\Http\Controllers;

use App\Models\Comprovante;
use Illuminate\Http\Request;

class ComprovanteController extends Controller
{
    public function index()
    {
        return view('comprovantes.index')->with(['comprovantes' => Comprovante::all()]);
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
