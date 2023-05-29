<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        $proveedors=Proveedor::orderBy('id', 'desc')->paginate();
        return view('proveedores.index',compact('proveedors'));
    }

    public function create(){
        return view('proveedores.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'marca'=>'required',
            'precio'=>'required',
            'rutaImagen'=>'required'
        ]);

        $proveedor = new Proveedor();
        $proveedor->nombre = $request->name;
        $proveedor->contacto = $request->contacto;
        
        $proveedor->save();

        return redirect()->route('proveedores.show', $proveedor);
    }

    public function show(Proveedor $proveedor){
        return view('proveedores.show',compact('proveedor'));
    }

    public function edit(Proveedor $proveedor){
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, Proveedor $proveedor){

        $request->validate([
            'name'=>'required',
            'contacto'=>'required'    
        ]);

        $proveedor->nombre = $request->name;
        $proveedor->contacto = $request->contacto;
        

        $proveedor->save();

        return redirect()->route('proveedor.show', $proveedor);
    }

    public function destroy(Proveedor $proveedor){
        $proveedor->delete();
        return redirect()->route('proveedor.index');
    }




}
