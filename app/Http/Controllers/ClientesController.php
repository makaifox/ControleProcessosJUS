<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use App\Exports\Processos;
use App\Imports\ClientesImport;
use Maatwebsite\Excel\Facades\Excel;


class ClientesController extends Controller
{


    public function index()
    {
        $cliente = clientes::paginate(6);
        return view('clientes.index', ['clientes' => $cliente]);
    }


    public function create() 
    {
        return view('clientes.create');
    }

    public function store(Request $request ) 
    {
        clientes::create([
        'nummeroProcesso' => $request->nummeroProcesso,
        'tribunal' => $request->tribunal,
        'comarca' => $request->comarca,
        'orgao' => $request->orgao,
        'autor' => $request->autor,
        'reu' => $request->reu,
        'estado' => $request->estado,
        'status' => $request->status,
        'andamento' => $request->andamento
        ]);

        return "Processo Cadastrado com Sucesso !";
    }

    public function show($id)
    {
        $cliente = clientes::findOrFail($id);
        return view('clientes.show', ['clientes' => $cliente]);
    }

    public function edit($id)
    {
        $cliente = clientes::findOrFail($id);
        return view('clientes.edit', ['clientes' => $cliente]);
    }

    public function update(Request $request, $id ) 

        
    {
        $cliente = clientes::findOrFail($id);


        $cliente->update([
        'nummeroProcesso' => $request->nummeroProcesso,
        'tribunal' => $request->tribunal,
        'comarca' => $request->comarca,
        'orgao' => $request->orgao,
        'autor' => $request->autor,
        'reu' => $request->reu,
        'estado' => $request->estado,
        'status' => $request->status,
        'andamento' => $request->andamento
        ]);

        return "Processo Atualizado com Sucesso !";
    }

    public function delete($id)
    {
        $cliente = clientes::findOrFail($id);
        return view('clientes.delete',['clientes' => $cliente]);
    }

    public function destroy($id)
    {
        $cliente = clientes::findOrFail($id);
        $cliente ->delete();

        return "Processo Removido com Sucesso !";
    }

    public function export()
    {
        return Excel::download(new Processos, 'Processos.xlsx');
    } 

    public function import(Request $request) 
    {
        Excel::import(new ClientesImport,$request->file);
       
        
        return redirect('/clientes')->with('success', 'Importação concluida com sucesso !');
    }


    
}


