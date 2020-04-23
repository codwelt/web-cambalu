<?php

namespace App\Http\Controllers\Usuario;

use App\Soporte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoporteController extends Controller
{

    public function create()
    {
        return view('usuario.soporte');
    }
    public function store(Request $request)
    {
        $soporte = Soporte::create(["mensaje" => $request->get("mensaje")]);

        if($soporte){
            flash("Soporte enviado, nos pondremos en contacto para ayudarte")->success()->important();
        }else{
            flash("Opps! algo ocurrio vuelve a intentar")->error()->important();
        }
        return redirect()->back();

    }
}
