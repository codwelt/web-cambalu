<?php

namespace App\Http\Controllers\Usuario;

use App\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    }
}
