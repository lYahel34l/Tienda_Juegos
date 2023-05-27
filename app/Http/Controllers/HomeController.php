<?php

namespace App\Http\Controllers;

use App\Models\Juguete;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $juguetes=Juguete::all();
        return view('welcome',compact('juguetes'));
    }
}
