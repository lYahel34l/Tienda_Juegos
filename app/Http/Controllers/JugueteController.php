<?php

namespace App\Http\Controllers;

use App\Models\Juguete;
use Illuminate\Http\Request;

class JugueteController extends Controller
{
    public function index(){
        $juguetes=Juguete::orderBy('id', 'desc')->paginate();
        return view('juguetes.index',compact('juguetes'));
    }

    public function create(){
        return view('juguetes.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'marca'=>'required',
            'precio'=>'required',
            'rutaImagen'=>'required'
        ]);

        $juguete = new Juguete();
        $juguete->producto = $request->name;
        $juguete->marca = $request->marca;
        $juguete->precio = $request->precio;
        $juguete->rutaImagen = $request->rutaImagen;

        $juguete->save();

        return redirect()->route('juguete.show', $juguete);
    }

    public function show(Juguete $juguete){
        return view('juguetes.show',compact('juguete'));
    }

    public function edit(Juguete $juguete){
        return view('juguetes.edit', compact('juguete'));
    }

    public function update(Request $request, Juguete $juguete){

        $request->validate([
            'name'=>'required',
            'marca'=>'required',
            'precio'=>'required',
            'rutaImagen'=>'required'
        ]);

        $juguete->producto = $request->name;
        $juguete->marca = $request->marca;
        $juguete->precio = $request->precio;
        $juguete->rutaImagen = $request->rutaImagen;

        $juguete->save();

        return redirect()->route('juguete.show', $juguete);
    }

    public function destroy(Juguete $juguete){
        $juguete->delete();
        return redirect()->route('juguete.index');
    }
}
