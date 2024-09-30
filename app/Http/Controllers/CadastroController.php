<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastro.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:cadastros',
            'telefone' => 'required',
            'endereco' => 'required',
        ]);

        Cadastro::create($request->all());
        return redirect()->route('cadastros.index')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function index()
    {
        $cadastros = Cadastro::all();
        return view('cadastro.index', compact('cadastros'));
    }
}

