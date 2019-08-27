<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\Usuario\StoreContact;
use App\Trabajo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(Trabajo $trabajo)
    {

        return view('contact',[
            'trabajo' => $trabajo
        ]);

    }

    public function store(StoreContact $request)
    {
        $contact = Contact::create($request->only(["mensaje","whatsapp","id_trabajo"]));

        if($contact){
            //Mensaje de que fue contactado

            flash('Error! No fue posible enviar el mensaje de contacto. Intentalo nuevamente!')->error()->important();
            return redirect()->route('garden');
        }
        flash('Exito! El mensaje fue recibido, a partir de ahora comienzan las 24H')->success()->important();
        return redirect()->route('garden');

    }
}
