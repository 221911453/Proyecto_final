<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller{

    public function contact(){
        return view('contact');
    }
    public function envio(){

        $message = request()->validate([
            'Nombre' => 'required',
            'Correo' => 'required',
            'Sujeto' => 'required',
            'Mensaje' => 'required',
        ]);

        Mail::to('fabricadelavaderos.eltigre@gmail.com')->send(new ContactanosMail($message));

        return view('contact');
    }
}
