<?php

namespace App\Http\Controllers;

use App\Models\Juguete;
use Illuminate\Http\Request;

class JugueteController extends Controller
{
    public function index(){
        $juguetes=Juguete::all();
        return view('juguetes.index',compact('juguetes'));
    }

    public function create(){
        return view('juguetes.create');
    }

    public function show($id){
        $juguete = Juguete::find($id);

        return view('juguetes.show',compact('juguete'));
    }
}
