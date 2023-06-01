<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Juguete;
use App\Models\Venta;
use Illuminate\Http\Request;



class VentaController extends Controller
{
    public function index(){
       $clientes= Cliente::all();

       return view('ventas.index',compact('clientes'));
    }

    public function create()
{
    $clientes = Cliente::all();
    $juguetes = Juguete::all();

    return view('ventas.create', compact('clientes', 'juguetes'));
}

    public function store(Request $request)
    {
        // Validar los datos de entrada si es necesario
        $request->validate([
            'cliente_id' => 'required',
            'juguete_id' => 'required',
        ]);

        // Crear una nueva venta
        Venta::create([
            'cliente_id' => $request->cliente_id,
            'juguete_id' => $request->juguete_id,
        ]);

        // Redireccionar a la página de ventas o mostrar un mensaje de éxito
        return redirect()->route('ventas.index');
    }
}
