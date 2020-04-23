<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\Usuario\StoreContact;
use App\Trabajo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function create(Trabajo $trabajo)
    {

        return view('contact',[
            'trabajo' => $trabajo
        ]);

    }

    public function store(StoreContact $request,Trabajo $trabajo)
    {

        $data = $request->only(["mensaje","whatsapp"]);

        $data['id_trabajo'] = $trabajo->id;

        $contact = Contact::create($data);

        if($contact == null){
            //Mensaje de que fue contactado

            flash('Error! No fue posible enviar el mensaje de contacto. Intentalo nuevamente!')->error()->important();
            return redirect()->back()->withInput();
        }

        //Envio de correo
        $autor = $trabajo->autor;
        Mail::send('email.contact',[
            'trabajo' => $trabajo->titulo,
            'materia' => $trabajo->materia->nombre,
            'fecha' => Carbon::now()->toDateString(),
            'whatsapp' => $contact->whatsapp,
            'mensaje' => $contact->mensaje
        ],
            function($msj) use ($autor){
                $msj->subject("Alguien quiere tu trabajo!!");
                $msj->to($autor->email);
                $msj->bcc('heros.david47@gmail.com', "WebDev");
                $msj->bcc('furiosojuan0@gmail.com', "FuriosoJack");
            });


        flash('Exito! El mensaje fue recibido, el autor se comunicara con tigo pronto.')->success()->important();






        return redirect()->back();

    }
}
