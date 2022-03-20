<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categoria;

class ControllerCategoria extends Controller
{
    public function index(){
        $categorias = categoria::paginate(6);
        return view('categoria.list_categoria', compact('categorias'));
    }
}
