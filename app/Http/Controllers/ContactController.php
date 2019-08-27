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
            return redirect()->route('garden');
        }
        //Mensaje de que fallo la creacion del contacto
        return redirect()->route('garden');

    }
}
