<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public readonly Cliente $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = $this->cliente->all();
        return view('listarCliente', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastrarCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->cliente->create([
            'nome' => $request->input('nome'),
            'endereco' => $request->input('endereco'),
            'bairro' => $request->input('bairro'),
            'cep' => $request->input('cep'),
            'estado' => $request->input('estado'),
            'cidade' => $request->input('cidade')
        ]);

        return redirect()->route('Cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $Cliente)
    {
        return view('editarCliente', ['cliente' => $Cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->cliente->where('id', $id)->update($request->except(['_token','_method']));

        return redirect()->route('Cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->cliente->where('id', $id)->delete();
        return view('listarCliente');
    }
}
