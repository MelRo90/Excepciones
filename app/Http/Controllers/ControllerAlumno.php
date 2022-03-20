<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\alumno;

class ControllerAlumno extends Controller
{
    public function index(){
        $alumnos = alumno::join('categoria', 'alumno.fk_id_categoria', '=', 'categoria.id_categoria')->select('alumno.*', 'categoria.descripcion')->paginate(6);
        return view('alumno.list_alumno', compact('alumnos'));
        view('404.blade.php');
    }
}
