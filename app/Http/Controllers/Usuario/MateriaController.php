<?php

namespace App\Http\Controllers\Usuario;

use App\Materia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class MateriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $nombreMateria = Str::upper($request->get('nombreMateria'));


        $materia = Materia::findByNombre($nombreMateria)->first();


        if($materia){
            throw new \JsonException("La materia {$nombreMateria} ya existe");
        }

        Materia::create([
            'nombre' => $nombreMateria
        ]);

        return response()->json(['message' => 'Materia Creada']);


    }
}
