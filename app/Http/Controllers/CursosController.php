<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        return "Esta es la pagina de cursos";
    }

    public function create(){
        return "Esta es la pagina para crear un curso";
    }

    public function show(){
        return "Aqui puedes consultar tus cursos completados";
    }

    public function proces(){
        return "Aqui puedes ver todos tus cursos en proceso";
    }
}
