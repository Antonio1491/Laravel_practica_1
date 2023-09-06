<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new ContactanosMailable($request->all());

        Mail::to('antonio.gongora1491@gmail.com')->send($correo);

        //redireccionamos a la misma vista con una alerta
        //enviamos un msj de sesión
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
