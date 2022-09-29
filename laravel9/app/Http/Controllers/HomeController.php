<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mostrar()
    {
        return view('home');
    }

    public function cadastarCaminhao()
    {
        return view('formulario');
    }
}



