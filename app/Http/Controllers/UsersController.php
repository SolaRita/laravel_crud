<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __invoke ($id,$curso=null) {
        if ($curso){
            return "Bienvenido/a $id a tu curso de $curso";
        }else{
            return "Bienvenido/a! ¿Que curso quieres hacer?";
        };
}}




    
    