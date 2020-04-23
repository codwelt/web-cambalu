<?php

namespace App\Http\Controllers\Usuario;

use App\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrabajoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        $materias = Materia::all();

        return view('usuario.trabajo.create',[
            'materias' => $materias
        ]);

    }


    public function store(Request $request)
    {

        Auth::user()->trabajos()->create([
           'titulo' => $request->get('titulo'),
           'descripcion' => $request->get('descripcion'),
           'id_materia' => $request->get('materia')
        ]);

        flash("Exito! Trabajo creado")->success()->important();
        return redirect()->back();

    }


}
