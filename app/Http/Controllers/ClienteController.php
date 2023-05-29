<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes=Cliente::orderBy('id', 'desc')->paginate();
        return view('clientes.index',compact('clientes'));
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'APpaterno'=>'required',
            'APmaterno'=>'required',
            'direccion'=>'required',
            'Ciudad'=>'required',
            'Telefono'=>'required'
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->name;
        $cliente->APpaterno = $request->APpaterno;
        $cliente->APmaterno = $request->APmaterno;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->telefono = $request->telefono;

        $cliente->save();

        return redirect()->route('cliente.show', $cliente);
    }

    public function show(Cliente $cliente){
        return view('clientes.show',compact('cliente'));
    }

    public function edit(Cliente $cliente){
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente){

        $request->validate([
            'name'=>'required',
            'APpaterno'=>'required',
            'APmaterno'=>'required',
            'direccion'=>'required',
            'Ciudad'=>'required',
            'Telefono'=>'required'
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->name;
        $cliente->APpaterno = $request->APpaterno;
        $cliente->APmaterno = $request->APmaterno;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->telefono = $request->telefono;

        $cliente->save();

        return redirect()->route('cliente.show', $cliente);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
