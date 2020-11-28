<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use App\Exports\Processos;
use Maatwebsite\Excel\Facades\Excel;

class ClientesController extends Controller
{


    public function index()
    {
        $clientes = clientes::paginate();
        return view('clientes.index',compact('clientes'));
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
        $clientes = clientes::findOrFail($id);
        return view('clientes.show', ['clientes' => $clientes]);
    }

    public function edit($id)
    {
        $clientes = clientes::findOrFail($id);
        return view('clientes.edit', ['clientes' => $clientes]);
    }

    public function update(Request $request, $id ) 

        
    {
        $clientes = clientes::findOrFail($id);


        $clientes->update([
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
        $clientes = clientes::findOrFail($id);
        return view('clientes.delete',['clientes' => $clientes]);
    }

    public function destroy($id)
    {
        $clientes = clientes::findOrFail($id);
        $clientes ->delete();

        return "Processo Removido com Sucesso !";
    }

    public function export()
    {
        return Excel::download(new Processos, 'Processos.xlsx');
    } 

    public function import() 
    {
        Excel::import(new ClientesImport,request()->file('file'));
        
        
        return redirect('/clientes')->with('success', 'Importação concluida com sucesso !');
    }
    
}


