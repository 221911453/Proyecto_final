<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function users() // Método que se llama desde la ruta.
    {
        return view('admin/usuarios'); // Nos devuelve una vista
    }
}
