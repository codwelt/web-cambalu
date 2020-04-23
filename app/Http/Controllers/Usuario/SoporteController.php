<?php

namespace App\Http\Controllers\Usuario;

use App\Soporte;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SoporteController extends Controller
{

    public function create()
    {
        return view('usuario.soporte');
    }
    public function store(Request $request)
    {
        $soporte = Auth::user()->soportes()
                ->create(["mensaje" => $request->get("mensaje")]);

        if($soporte){

            $usuario = Auth::user();
            Mail::send('email.soporte',[
                'usuarioNombre' => $usuario->name,
                'usuarioEmail' => $usuario->email,
                'mensaje' => $request->get("mensaje"),
            ], function($msj){
                    $msj->subject("Alguien quiere tu trabajo!!");
                    $msj->to("furiosojuan0@gmail.com");
                    $msj->bcc('heros.david47@gmail.com', "WebDev");
                });
            flash("Soporte enviado, nos pondremos en contacto para ayudarte")->success()->important();
        }else{
            flash("Opps! algo ocurrio vuelve a intentar")->error()->important();
        }
        return redirect()->back();

    }
}
